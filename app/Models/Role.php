<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = ['name' , 'key' , 'color'];

    protected $dates = [
        'deleted_at'
    ];

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function hasPermission($key)
    {
        return $this->permission->contains('key', $key);
    }

    public function userTrashed()
    {
        return $this->hasMany(User::class)->onlyTrashed();
    }

    public function scopeSearch($query, $term){
        $query->where(function ($query) use ($term){
            $query->where('name','like', "%$term%")
                ->orWhere('key','like', "%$term%")
                ->orWhere('color','like', "%$term%");
        });
    }

}

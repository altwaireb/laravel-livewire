<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name' , 'slug' , 'ios3'];

    protected $dates = [
        'deleted_at'
    ];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = strtoupper($value);
    }

    public function setIso3Attribute($value)
    {
        $this->attributes['iso3'] = strtoupper($value);
    }

    public function cities(){
        return $this->hasMany(City::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }

}

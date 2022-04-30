<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = ['name' , 'key' , 'table_name'];

    protected $dates = [
        'deleted_at'
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }


    public static function generateFor($table_name)
    {
        self::firstOrCreate(['name'=>'Browse '.$table_name,'key' => 'browse_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'Read '.$table_name,'key' => 'read_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'Edit '.$table_name,'key' => 'edit_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'Add '.$table_name,'key' => 'add_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'Delete '.$table_name,'key' => 'delete_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'Restore '.$table_name,'key' => 'restore_'.$table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name'=>'Force Delete '.$table_name,'key' => 'forceDelete_'.$table_name, 'table_name' => $table_name]);
    }

    public static function removeFrom($table_name)
    {
        self::where(['table_name' => $table_name])->delete();
    }


}

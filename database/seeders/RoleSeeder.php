<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name' => 'Administrator',
            'key' => 'administrator',
            'color' => 'bg-red-700 text-white',
        ]);

        Role::firstOrCreate([
            'name' => 'Admin',
            'key' => 'admin',
            'color' => 'bg-orange-600 text-white',
        ]);

        Role::firstOrCreate([
            'name' => 'Moderator',
            'key' => 'moderator',
            'color' => 'bg-green-600 text-white',
        ]);

        Role::firstOrCreate([
            'name' => 'User',
            'key' => 'user',
            'color' => 'bg-gray-100 text-black',
        ]);

        Role::firstOrCreate([
            'name' => 'Banned',
            'key' => 'banned',
            'color' => 'bg-gray-600 text-white',
        ]);

        $permission_administrator = Permission::where('key','!=','banned')->pluck('id')->toArray();

        $admin_role = Role::where('key','administrator')->first();
        $admin_role->permission()->sync($permission_administrator);
    }
}

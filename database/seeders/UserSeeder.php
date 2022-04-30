<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_id = Role::where('key','administrator')->first()->id;
        $country_id = Country::where('slug','SA')->first()->id;
        $city_id = City::where('slug','HAIL')->first()->id;

        User::firstOrCreate([
            'name'              => 'Admin',
            'username'          => 'admin',
            'email'             => 'admin@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'), // password
            'remember_token'    => Str::random(10),
            'role_id'           => $role_id,
            'country_id'        => $country_id,
            'city_id'           => $city_id,
            'last_seen'         => null,
        ]);
    }
}

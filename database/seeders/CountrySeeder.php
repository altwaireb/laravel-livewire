<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::firstOrCreate([
            'name' => 'Saudi Arabia',
            'slug' => 'SA',
            'iso3' => 'SAU'
        ]);

        Country::firstOrCreate([
            'name' => 'United Arab Emirates',
            'slug' => 'AE',
            'iso3' => 'ARE'
        ]);

        Country::firstOrCreate([
            'name' => 'Kuwait',
            'slug' => 'KW',
            'iso3' => 'KWT'
        ]);

        Country::firstOrCreate([
            'name' => 'Qatar',
            'slug' => 'QA',
            'iso3' => 'QAT'
        ]);

        Country::firstOrCreate([
            'name' => 'Bahrain',
            'slug' => 'BH',
            'iso3' => 'BHR'
        ]);

        Country::firstOrCreate([
            'name' => 'Oman',
            'slug' => 'OM',
            'iso3' => 'OMN'
        ]);
    }
}

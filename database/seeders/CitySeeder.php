<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Hail',
            'slug'=>'hail',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Riyadh',
            'slug'=>'riyadh',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Abha',
            'slug'=>'abha',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Dammam',
            'slug'=>'dammam',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Jeddah',
            'slug'=>'jeddah',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Makkah',
            'slug'=>'makkah',

        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Medina',
            'slug'=>'medina',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Taif',
            'slug'=>'taif',

        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Tabuk',
            'slug'=>'tabuk',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Al Kharj',
            'slug'=>'al_kharj',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Buraidah',
            'slug'=>'buraidah',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Khamis Mushait',
            'slug'=>'khamis_mushait',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','SA')->first()->id,
            'name'=>'Al Hofuf',
            'slug'=>'al_hofuf',
        ]);


        City::firstOrCreate([
            'country_id'=> Country::where('slug','AE')->first()->id,
            'name'=>'Abu Dhabi',
            'slug'=>'abu_Dhabi',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','AE')->first()->id,
            'name'=>'Dubai',
            'slug'=>'dubai',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','AE')->first()->id,
            'name'=>'Sharjah',
            'slug'=>'sharjah',

        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','KW')->first()->id,
            'name'=>'Kuwait',
            'slug'=>'kuwait',

        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','KW')->first()->id,
            'name'=>'Al Ahmadi',
            'slug'=>'al_ahmadi',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','KW')->first()->id,
            'name'=>'Al Jahra',
            'slug'=>'al_jahra',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','QA')->first()->id,
            'name'=>'Doha',
            'slug'=>'doha',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','QA')->first()->id,
            'name'=>'Al Rayyan',
            'slug'=>'al_rayyan',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','QA')->first()->id,
            'name'=>'Umm Salal',
            'slug'=>'umm_salal',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','QA')->first()->id,
            'name'=>'Al Wakrah',
            'slug'=>'al_wakrah',
        ]);

        City::firstOrCreate([
            'country_id'=> Country::where('slug','QA')->first()->id,
            'name'=>'Al Khor',
            'slug'=>'al_khor',
        ]);
    }
}

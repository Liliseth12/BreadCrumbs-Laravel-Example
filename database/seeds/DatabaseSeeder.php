<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\City::class)->create([
        'name' => 'Johannesburg',
        'country_id' => function(){

            return factory(App\Country::class)->create([
                'name' => 'South Africa',
                'continent_id' => function(){

                    return factory(App\Continent::class)->create([
                        'name' => 'Africa' ])->id;
                }
                ])->id;
        }
        ]);
    }
}

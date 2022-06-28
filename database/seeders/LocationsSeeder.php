<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Locations;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                "name"=>"PISO 1 - TALENTO HUMANO", 
            ]
        ];
    
        foreach ($locations as $location) {
            Locations::create([
                'name' => $location["name"]
            ]);
        }
    }
}

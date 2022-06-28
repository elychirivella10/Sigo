<?php

namespace Database\Seeders;

use App\Models\Position;

use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            [
                "name"=>"NO SELECCIONADO", 
            ]
            
            ];
    
            foreach ($positions as $position) {
                Position::create([
                    'name' => $position["name"]
                ]);
            }
    }
}

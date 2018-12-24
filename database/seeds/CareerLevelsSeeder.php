<?php

use App\Models\Career_level;
use Illuminate\Database\Seeder;

class CareerLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $career_levels = [

            'Assistance Manager',
            'Department Head',
            'General Manager',
            'Product Manager',
            'Senior Manager',
            'Junior Manager',

        ];
        foreach ($career_levels as $career_level)
        {
            Career_level::Create(
                [
                    'name' => $career_level,
                    'user_id'=> 1
                ]
            );
        }
    }
}

<?php

use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [

            'Agriculture',
            'Arts',
            'Education',
            'Health Care',
            'Electricity',

        ];
        foreach ($industries as $industry)
        {
            Industry::Create(
                [
                    'name' => $industry,
                    'user_id'=> 1
                ]
            );
        }
    }
}

<?php

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [

            '0-2 Years',
            '2-5 Years',
            '5-10 Years',
            '10-20 Years',

        ];
        foreach ($experiences as $experience)
        {
            Experience::Create(
                [
                    'name' => $experience,
                    'user_id'=> 1
                ]
            );
        }
    }
}

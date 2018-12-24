<?php

use App\Models\Job_Type;
use Illuminate\Database\Seeder;

class JobTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_types = [

            'Freelance',
            'Part Time',
            'Full Time',
            'Internship',
            'Temporary'
        ];
        foreach ($job_types as $job_type)
        {
            Job_Type::Create(
                [
                    'name'=>$job_type,
                    'user_id'=> 1
                ]
            );
        }
    }
}

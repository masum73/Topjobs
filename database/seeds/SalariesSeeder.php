<?php

use App\Models\Salary;
use Illuminate\Database\Seeder;

class SalariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salary_ranges = [

            '0-5k',
            '5k-10k',
            '10k-15k',
            '15k-20k',
            '20k-30k',
            '30k-50k',
            '50k-80k',
            '80k-150k',
        ];
        foreach ($salary_ranges as $salary_range)
        {
            Salary::Create(
                [
                    'currency_id'=> 1,
                    'salary_range'=>$salary_range,
                    'user_id'=> 1
                ]
            );
        }
    }
}

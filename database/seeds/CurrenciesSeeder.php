<?php

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [

            'Taka'
        ];
        foreach ($currencies as $currency)
        {
            Currency::Create(
                [
                    'name'=> $currency,
                    'code'=>'BDT',
                    'user_id'=> 1
                ]
            );
        }
    }
}

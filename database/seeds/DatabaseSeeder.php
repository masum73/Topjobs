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
        $this->call(CareerLevelsSeeder::class);
        $this->call(CurrenciesSeeder::class);
        $this->call(ExperiencesSeeder::class);
        $this->call(IndustriesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(JobTypesSeeder::class);
        $this->call(QualificationsSeeder::class);
        $this->call(SalariesSeeder::class);
    }
}

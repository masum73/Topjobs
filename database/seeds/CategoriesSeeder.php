<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [

            'Marketing',
            'Finance',
            'Web Development',
            'Graphic Design',

        ];
        foreach ($categories as $category)
        {
            Category::Create(
                [
                    'name' => $category,
                    'slug' => $category,
                    'user_id'=> 1
                ]
            );
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $guarded = [];

    public function getAllJobs()
    {
        return $this->hasMany(Job_Category::class , 'category_id' ,'id');
    }
}

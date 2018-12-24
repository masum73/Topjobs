<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $guarded = [];

    public function getJobType()
    {
        return $this->belongsTo(Job_Type::class,'job_type_id','id');
    }
}

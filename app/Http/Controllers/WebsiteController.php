<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class WebsiteController extends Controller
{

    public function index()
    {
        $now = Carbon::now();

        $jobs = Job::all();

        $feature_jobs = Job::latest()->Take(6)->get();

        $categories = Category::latest()->Take(8)->get();

        $count = 0;

        foreach ($jobs as $job)
        {

            $crt = Carbon::parse($job->created_at);

            if($now->diffInDays($crt , false) == 0 )
            {
                $count++;
            }
        }

        $compact = compact('jobs' , 'count','categories','feature_jobs');

        return view('website.index' , $compact);
    }
}

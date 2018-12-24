<?php

namespace App\Http\Controllers\Company;

use App\Models\Career_level;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Industry;
use App\Models\Job;
use App\Models\Job_Category;
use App\Models\Job_Type;
use App\Models\Qualification;
use App\Models\Salary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function showJobCreateForm()
    {
        $job_types = Job_Type::all();
        $job_categories = Category::all();
        $salaries = Salary::all();
        $career_levels = Career_level::all();
        $experiences = Experience::all();
        $industries = Industry::all();
        $qualifications = Qualification::all();

        $compacts = compact('job_types','job_categories','salaries','career_levels','experiences','industries','qualifications');

        return view('dashboard.company.jobs.create',$compacts);
    }

    public function storeJobCreateForm(Request $request)
    {
        $job = Job::Create(

            [
                'user_id'  => auth()->user()->id ,
                'title' => $request->job_title ,
                'location' => $request->location ,
                'job_type_id' => $request->job_type ,
                'gender' => $request->gender ,
                'description' => $request->description ,
                'application_email_url' => $request->application_email_url ,
                'issue_date' =>  date('Y-m-d')
            ]

        );

        foreach ($request->job_categories as $job_category)
        {
            Job_Category::Create([

                'job_id' =>  $job->id,
                'category_id' => $job_category
            ]);
        }

        return redirect()->home();
    }
}

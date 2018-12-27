<?php

namespace App\Http\Controllers\Candidate;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function showJobDetails($id)
    {
        $job = Job::findOrfail($id);

        $compact = compact('job');

        return view('dashboard.candidate.job_details' , $compact );
    }

    public function showJobApplyForm($job_id)
    {
        $job = Job::findorfail($job_id);

        //Check If the user already applied for this Job

        $compact = compact('job');

        return view('dashboard.candidate.job_apply_form', $compact );
    }

    public function storeJobApplyForm($job_id)
    {
        $job = Job::findorfail($job_id);

        //Check If the user already applied for this Job

        //////////////////////////////////////////
        /// ///////////////////////////////////
    }
}

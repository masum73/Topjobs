<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        index
        if(auth()->user()->isAdmin()){
            dd("you are an admin user");
        }
        if(auth()->user()->isCompany()){
            $jobs = auth()->user()->jobs()->get();
            $compact = compact('jobs');
            return view('dashboard.company.home.index',$compact);
        }
        if(auth()->user()->isCandidate()){
            dd("you are an candidate user");
        }

        auth()->logout();
        return redirect()->route('login');

    }
}

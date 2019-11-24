<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function addJob()
    {
        return view('admin.job.add-job');
    }

    public function newJob(Request $request)
    {
        $job = new Job();
        $job->job_title         = $request->job_title;
        $job->job_description   = $request->job_description;
        $job->salary            = $request->salary;
        $job->location          = $request->location;
        $job->country           = $request->country;
        $job->save();
        return redirect()->back()->with('msg', 'Job Info Save Successfully!');
    }
    public function manageJob()
    {
        return view('admin.job.manage-job');

    }
}

<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view('welcome',[
            'jobs'=>$jobs

        ]);
    }
}

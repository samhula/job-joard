<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Job;

class ControllerJob extends Controller
{
    public function index(){
        return view('/index', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get(),
            'jobs' => Job::latest()
            ->paginate(12)
        ]);
    }

    public function jobs(){
        return view('/jobs', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get(),
            'jobs' => Job::latest()
            ->paginate(12)
        ]);
    }

    public function create(){
        return view('/job.create', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get()
        ]);
    }

    public function show(Job $job){
        return view('/job.show', [
            'job' => $job
        ]);
    }
}
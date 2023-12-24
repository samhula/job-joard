<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Job;

class ControllerSearch extends Controller
{
    public function index (){
        $searchQuery = request()->query('query');

        return view('jobs', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get(),
            'jobs' => Job::whereDate('deadline', '>', date('Y-m-d'))
            ->latest()
            ->filter(request(['job_title']))
            ->paginate(12)
            ])
        ->with(['query' => $searchQuery]);
    }
}
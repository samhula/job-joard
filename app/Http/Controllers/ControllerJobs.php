<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Continent;
use App\Models\Country;

class ControllerJobs extends Controller
{
    public function index(){
        return view('/index', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get()
        ]);
    }

    public function jobs(){
        return view('/jobs', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get()
        ]);
    }

    public function create(){
        return view('/job.create', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get()
        ]);
    }
}
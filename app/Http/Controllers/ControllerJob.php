<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\Application;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Job;
use App\Models\User;

use Auth;

class ControllerJob extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index', 'show', 'user', 'getJob']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('/index', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get(),
            'jobs' => Job::whereDate('deadline', '>=', date('Y-m-d'))
            ->latest()
            ->paginate(12),
            'numJobs' => count(Job::all())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allowed = array('owner', 'admin', 'recruiter');

        if(!in_array(auth()->user()->account_type, $allowed)){
            abort(403, 'Unauthorised');
        }

        return view('/job.create', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')
            ->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(auth()->user()->account_type != 'recruiter'){
            $request = null;
            return redirect('/');
        }

        $user_id = Auth::id();
        $name = auth()->user()->name;

        $formFields = $request->validate([
            'job_title' => 'required',
            'job_type' => 'required',
            'num_applications' => 'nullable',
            'deadline' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'skills' => 'required',
            'benefits' => 'required',
            'url' => ['nullable', Rule::unique('jobs', 'url')]
        ]);

        $formFields['user_id'] = $user_id;
        $formFields['company_name'] = $name;
        $formFields['num_applications'] = 0;

        Job::create($formFields);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('/job.show', [
            'job' => $job
        ]);
    }

    public function getJob(Job $job){
        return json_encode($job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        if(auth()->user()->id != $job->user_id){
            if(auth()->user()->account_type != 'admin'){
                return redirect('dashboard');
            }
        }

        if($job->deadline < date('Y-m-d')){
            return redirect('dashboard');
        }

        return view('/job.edit', [
            'continents' => Continent::all(),
            'countries' => Country::orderBy('display_order', 'asc')->get(),
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        if($job->deadline < date('Y-m-d')){
            abort('403');
        }

        $formFields = $request->validate([
            'job_title' => 'required',
            'job_type' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'skills' => 'required',
            'benefits' => 'required',
            'url' => ['nullable', Rule::unique('jobs', 'url')]
        ]);

        $job->update($formFields);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        if(in_array(auth()->user()->account_type, array('owner', 'admin'))){
            $job->delete();
        }
        return back();
    }

    public function apply(Request $request, Job $job, User $user)
    {
        if(auth()->user()->account_type != 'seeker'){
            $request = null;
            return redirect('/');
        }


    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;
use App\Models\User;

use Auth;

class ControllerDashboard extends Controller
{
    public function index (User $user){
        $user = User::where('id', '=', Auth::id())->first();
        $account_type = auth()->user()->account_type;
        $account_types = array('owner', 'admin', 'recruiter', 'seeker');

        switch ($account_type) {
            case 'owner':
                $jobs = Job::latest()
                    ->paginate(20);
                break;
            case 'admin':
                $jobs = Job::latest()
                    ->paginate(20);
                break;
            case 'recruiter':
                $jobs = Job::where('user_id', '=', Auth::id())
                    ->orderBy('deadline', 'asc')
                    ->paginate(20);
                break;
            default:
                $jobs = Job::where('user_id', '=', Auth::id())
                    ->orderBy('deadline', 'asc')
                    ->paginate(20);
                break;
        }

        return view('dashboard.index', [
                'user' => $user,
                'jobs' => $jobs
            ]);
    }

    public function applicants (User $user){

    }

    public function jobs(){
        $allowed = array('owner', 'admin', 'recruiter');

        if(in_array(auth()->user()->account_type, $allowed)){
            if(auth()->user()->account_type == 'recruiter'){
                $jobs = Job::where('user_id', '=', Auth::id())
                ->orderBy('id', 'desc')
                ->paginate(50);
            }
            else{
                $jobs = Job::latest()->paginate(50);
            }
        }
        else {
            $jobs = Job::latest()->paginate(10);
        }

        return view('dashboard.jobs', [
            'jobs' => $jobs
        ]);
    }
}
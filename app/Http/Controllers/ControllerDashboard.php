<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;
use App\Models\User;

use Auth;

class ControllerDashboard extends Controller
{
    public function index (User $user){
        $id = Auth::id();

        return view('dashboard.index', [
            'jobs' => Job::where('user_id', '=', $id)
            ->paginate(20)
        ]);
    }
}

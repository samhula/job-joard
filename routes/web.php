<?php

use Illuminate\Support\Facades\Route;

// CONTROLLERS
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ControllerJob;
use App\Http\Controllers\ControllerSearch;
use App\Http\Controllers\ControllerUser;

// MODELS
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Job Routes
Route::get('/jobs/search', [ControllerSearch::class, 'index']);
Route::post('/jobs/{job}/apply', [ControllerJob::class, 'apply'])->middleware('auth');
Route::get('/api/jobs/{job}', [ControllerJob::class, 'getJob']);
Route::resource('jobs', ControllerJob::class);

Route::get('/about', function() {
    return view('about');
});

// Signin and Signup Routes

Route::get('/signin', [ControllerUser::class, 'index'])->name('login')->middleware('guest');
Route::post('/authenticate', [ControllerUser::class, 'authenticate']);
Route::get('/signup', [ControllerUser::class, 'create'])->middleware('guest');
Route::post('/signup', [ControllerUser::class, 'store']);
Route::post('/logout', [ControllerUser::class, 'logout'])->middleware('auth');

Route::get('/account', function (){
    return view('account');
});

// Dashboard Routes

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'dashboard'], function(){
        Route::get('/', [ControllerDashboard::class, 'index']);

        Route::get('/post', function (){
            return view('job.create');
        });

        Route::get('/applied', function(){
            return view('dashboard.applied');
        });

        Route::get('/settings', function(){
            return view('dashboard.settings');
        });

        Route::get('/notifications', function(){
            return view('dashboard.notifications');
        });

        Route::get('/applicants', function(){
            return view('dashboard.applicants');
        });

        Route::post('/users/{user}', [ControllerUser::class, 'update']);

        Route::get('/jobs', [ControllerDashboard::class, 'jobs']);
    });
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/', [ControllerJob::class, 'index']);
<?php

use Illuminate\Support\Facades\Route;

// CONTROLLERS
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ControllerJob;
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

Route::get('/jobs/create', [ControllerJob::class, 'create']);
Route::get('/', [ControllerJob::class, 'index']);
Route::get('/jobs/{job}', [ControllerJob::class, 'show']);
Route::get('/jobs', [ControllerJob::class, 'jobs']);

Route::get('/jobs/update', function(){
    return view('job');
});

Route::get('/jobs/delete', function (){
    return view('job');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/signin', [ControllerUser::class, 'index']);
Route::post('/authenticate', [ControllerUser::class, 'authenticate']);
Route::get('/signup', [ControllerUser::class, 'create']);
Route::post('/signup', [ControllerUser::class, 'store']);
Route::post('/logout', [ControllerUser::class, 'logout']);

Route::get('/account', function (){
    return view('account');
});

Route::get('/dashboard', [ControllerDashboard::class, 'index']);

Route::get('dashboard/post', function (){
    return view('job.create');
});

Route::get('/dashboard/applied', function(){
    return view('dashboard.applied');
});

Route::get('/dashboard/settings', function(){
    return view('dashboard.settings');
});

Route::get('/dashboard/messages', function(){
    return view('dashboard.messages');
});

Route::get('/dashboard/applicants', function(){
    return view('dashboard.applicants');
});

Route::get('/pricing', function () {
    return view('pricing');
});
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerJobs;

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

// Route::get('/jobs', [ControllerJobs::class, 'index']);

Route::get('/jobs/create', [ControllerJobs::class, 'create']);
Route::get('/', [ControllerJobs::class, 'index']);
Route::get('/jobs', [ControllerJobs::class, 'jobs']);

Route::get('/jobs/show', function () {
    return view('job.show');
});

Route::get('/jobs/update', function(){
    return view('job');
});

Route::get('/jobs/delete', function (){
    return view('job');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/account', function (){
    return view('account');
});

Route::get('/dashboard', function (){
    return view('dashboard.index');
});

Route::get('dashboard/post', function (){
    return view('job.create');
});

Route::get('/dashboard/applied', function(){
    return view('dashboard.applied');
});

Route::get('/pricing', function () {
    return view('pricing');
});
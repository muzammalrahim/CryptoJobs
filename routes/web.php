<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/home',[HomeController::class, 'showJobs']);

Route::get('/jobs', [JobsController::class, 'addJobs']);
Route::post('/upload_jobs', [JobsController::class, 'uploadJobs']);
Route::get('/job_list', [JobsController::class, 'jobList']);
Route::get('/job_delete/{id}', [JobsController::class, 'deleteJob']);
Route::get('/job_update/{id}', [JobsController::class, 'updateJob']);
Route::post('/job_edit/{id}', [JobsController::class, 'editJob']);
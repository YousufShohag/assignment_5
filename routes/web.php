<?php

use App\Http\Controllers\experienceController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\projectsController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\File;

//use Illuminate\Support\Facades\Request;

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

// Route::get('/', function () {
//     $result = json_decode(file_get_contents(storage_path("data/welcome.json")));
//     //dd($result);
//     return view('welcome' . compact('result'))->with('profile' . $result);
// });

Route::get('/', [indexController::class, 'index'])->name('welcome');

//! ROUTE FOR Projects
Route::get('/projects', [projectsController::class, 'showProjects'])->name('projects');
Route::get('/projectDetails/{id}', [projectsController::class, 'projectDetails'])->name('projectDetails');

//! ROUTE FOR WORK EXPERIENCE
Route::get('/workexperiences', [experienceController::class, 'workexperiences'])->name('workexperiences');
Route::get('/workexperiencesdetails/{id}', [experienceController::class, 'workexperiencesdetails'])->name('workexperiencedetail');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


// route to home controller
Route::get('/',[HomeController::class,"home"]);
//route to redirect after login depending on the user type (doctor,patient)
Route::get('/redirects',[HomeController::class,"redirects"]);


Route::get('/patients',[AdminController::class,"patients"]);
Route::get('/deletepatient/{id}',[AdminController::class,"delete_patient"]);

Route::get('/test',[AdminController::class,"test"]);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

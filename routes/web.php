<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// route redirection dashboard Student
Route::get('/home', function () {
    $user = auth::id();
    Log::channel('mysql_logging')->info("User in home", ['user_Id' => $user]);
    return view('dashboard');
    
})->middleware(['auth'])->name('dashboard');

// route dashboard Student
Route::get('/dashboard', function () {
    $user = auth::id();
    Log::channel('mysql_logging')->info("User in dashboard", ['user_Id' => $user]);
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
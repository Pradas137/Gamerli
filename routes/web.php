<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;
use App\Models\Ranking;
use App\Models\Liste;


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

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    if (Auth::check()) {
        if(Auth::user()->role == "admin"){
            return redirect('/admin/dashboard');
        }
        if (Auth::user()->role == "user") {
            return view('dashboard');
        }
    }
})->middleware(['auth'])->name('dashboard');

// route redirection dashboard Admin (AdminPanel)
Route::get('/admin', function () {
    return redirect('/admin/dashboard');
})->middleware(['auth',  'can:accessAdmin'])->name('dashboard');

// route dashboard Admin (AdminPanel)
Route::get('/admin/dashboard', function () {
    return view('admin');
})->middleware(['auth',  'can:accessAdmin'])->name('dashboard');

Route::get('/admin/dashboard/requests', function () {
    $user = auth::id();
    return view('request', ['request' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('request');

Route::get('/admin/dashboard/friends', function () {
    $user = auth::id();
    return view('friendAdmin', ['friends' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('friend');

Route::get('/admin/dashboard/rankings', function () {
    $user = auth::id();
    return view('rankingAdmin', ['ranking' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('ranking');

Route::get('/admin/dashboard/lists', function () {
    $user = auth::id();
    return view('listsAdmin', ['lists' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('list');

Route::get('/admin/dashboard/profiles', function () {
    $user = auth::id();
    return view('profileAdmin', ['profiles' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('profile');

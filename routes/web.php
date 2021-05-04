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
    $data = Request::all();
    $user = auth::id();
    return view('request', ['request' => $data]);
})->middleware(['auth',  'can:accessAdmin'])->name('request');

Route::get('/admin/dashboard/friends', function () {
    $data = Friend::all();
    $user = auth::id();
    return view('friendAdmin', ['friends' => $data]);
})->middleware(['auth',  'can:accessAdmin'])->name('friends');

Route::get('/admin/dashboard/rankings', function () {
    $data = Ranking::all();
    $user = auth::id();
    return view('rankingAdmin', ['ranking' => $data]);
})->middleware(['auth',  'can:accessAdmin'])->name('ranking');

Route::get('/admin/dashboard/lists', function () {
    $data = Liste::all();
    $user = auth::id();
    return view('listsAdmin', ['lists' => $data]);
})->middleware(['auth',  'can:accessAdmin'])->name('lists');

Route::get('/admin/dashboard/profiles', function () {
    $user = auth::id();
    return view('profileAdmin', ['profiles' => $data]);
})->middleware(['auth',  'can:accessAdmin'])->name('profiles');

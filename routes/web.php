<?php
use App\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Depeloper;
use App\Models\Director;
use App\Models\Gconsole;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Publisher;
use App\Models\Saga;
use App\Models\User;
use App\Models\Score;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\ProfileController;
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
Route::resource('/admin/dashboard/ranking','App\Http\Controllers\RankingController');
Route::resource('/dashboard/ranking','App\Http\Controllers\RankingController');
Route::resource('/admin/dashboard/profile','App\Http\Controllers\ProfileController');
Route::resource('/dashboard/profile','App\Http\Controllers\ProfileController');
//Route::post('/perfil/foto', 'ProfileController@updatePhoto');
//Route::resource('slider',SliderController::class);


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

/*-------------Usuarios-------------------*/

Route::get('/dashboard/request', function () {
    return view('request');
})->middleware(['auth',  'can:accessUser'])->name('request');

Route::get('/dashboard/publicList', function () {
    return view('publicList');
})->middleware(['auth',  'can:accessUser'])->name('publicList');

Route::get('/dashboard/myList', function () {
    return view('myList');
})->middleware(['auth',  'can:accessUser'])->name('myList');

Route::get('/dashboard/friend', function () {
    return view('friend');
})->middleware(['auth',  'can:accessUser'])->name('friend');

/*-------------ADIMINISTRADOR-------------------*/

// route dashboard Admin (AdminPanel)
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth',  'can:accessAdmin'])->name('adminDashboard');

Route::get('/admin/dashboard/request', function () {
    return view('request');
})->middleware(['auth',  'can:accessAdmin'])->name('request');

Route::get('/admin/dashboard/publicList', function () {
    return view('publicList');
})->middleware(['auth',  'can:accessAdmin'])->name('publicList');

Route::get('/admin/dashboard/myList', function () {
    return view('myList');
})->middleware(['auth',  'can:accessAdmin'])->name('myList');

Route::get('/admin/dashboard/friend', function () {
    return view('friend');
})->middleware(['auth',  'can:accessAdmin'])->name('friend');
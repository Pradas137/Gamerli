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
use App\Http\Controllers\GameImportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Gamerli2Controller;



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

Route::get('/prueva2', function () {
    return view('prueva2');
});

Route::resource('/prueva2', Gamerli2Controller::class);
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

Route::get('/dashboard/profile', function () {
	$user_id = auth::id();
	return view('profile', ['user' => $user_id]);
})->middleware(['auth',  'can:accessUser'])->name('profile');

Route::get('/dashboard/ranking', function () {
    $data = Game::all();
    $user = auth::id();
    return view('ranking', ['ranking' => $data]);
})->middleware(['auth',  'can:accessUser'])->name('ranking');

Route::get('/dashboard/list', function () {
    $data = Game::all();
    $user = auth::id();
    return view('list', ['user' => $data]);
})->middleware(['auth',  'can:accessUser'])->name('list');

Route::get('/dashboard/request', function () {
    $data = Game::all();
    $user = auth::id();
    return view('request', ['request' => $data]);
})->middleware(['auth',  'can:accessUser'])->name('request');

Route::get('/dashboard/friend', function () {
    $data = Game::all();
    $user = auth::id();
    return view('friend', ['friend' => $data]);
})->middleware(['auth',  'can:accessUser'])->name('friend');

/*-------------ADIMINISTRADOR-------------------*/

// route dashboard Admin (AdminPanel)
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth',  'can:accessAdmin'])->name('adminDashboard');


Route::get('/admin/dashboard/requests', function () {
    $user = auth::id();
    return view('request', ['request' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('request');

Route::get('/admin/dashboard/friend', function () {
    $user = auth::id();
    return view('friend', ['friend' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('friend');

Route::get('/admin/dashboard/ranking', function () {
    $data = Game::all();
    $user = auth::id();
    return view('ranking', ['ranking' => $data]);
})->middleware(['auth',  'can:accessAdmin'])->name('ranking');


Route::get('/admin/dashboard/myList', function () {
    $user = auth::id();
    return view('myList', ['mylist' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('mylist');

Route::get('/admin/dashboard/publicList', function () {
    $user = auth::id();
    return view('publicList', ['publiclist' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('publiclist');

Route::get('/admin/dashboard/profile', function () {
    $user = auth::id();
    return view('profile', ['profile' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('profile');

Route::resource('userUpdate', ProfileController::class);

/*Route::resource('admin/dashboard/Import', GameImportController::class);

Route::resource('admin/dashboard/RankingAdmin.index', GameController::class);
*/

Route::resource('/dashboard/profile/avatar', ProfileController::class);
/*Route::resource('/ranking', GameController::class);*/
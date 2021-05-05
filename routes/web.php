<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Gamer;
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
    return view('friendAdmin', ['friend' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('friend');

Route::get('/admin/dashboard/rankings', function () {
    $user = auth::id();
    return view('rankingAdmin', ['ranking' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('ranking');

Route::get('/admin/dashboard/lists', function () {
    $user = auth::id();
    return view('listsAdmin', ['list' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('list');

Route::get('/admin/dashboard/profile', function () {
    $user = auth::id();
    return view('profileAdmin', ['profile' => $user]);
})->middleware(['auth',  'can:accessAdmin'])->name('profile');

Route::resource('admin/dashboard/Import', GameImportController::class);
//mails
Route::get('/send-email', [PostController::class, 'sendEmail']);

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
use App\Models\Gamelist;
use App\Http\Controllers\GameImportController;
use App\Http\Controllers\Game_GenreController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\RankingUserController;
use App\Http\Controllers\PublicListController;
use App\Http\Controllers\MyListController;


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
Route::resource('/dashboard/rankingUser','App\Http\Controllers\RankingUserController');

Route::resource('/admin/dashboard/profile','App\Http\Controllers\ProfileController');
Route::resource('/dashboard/profiles','App\Http\Controllers\ProfileController');

Route::resource('/admin/dashboard/adminPublicList','App\Http\Controllers\PublicListController');
Route::resource('/dashboard/PublicList','App\Http\Controllers\PublicListController');

Route::resource('/admin/dashboard/adminMyList','App\Http\Controllers\MyListController');
Route::resource('/dashboard/MyList','App\Http\Controllers\MyListController');

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
                $image = Game::where('name','like','%'."Assassin's Creed".'%')->first();
            $urlimage=$image->image;
    
            $image2 = Game::where('name','like','%'."Battlefield IV".'%')->first();
            $urlimage2=$image2->image;
            return view('dashboard',['image' => $urlimage],['image2' => $urlimage2]);
        }
    }
})->middleware(['auth'])->name('dashboard');

/*-------------Usuarios-------------------*/

Route::get('/dashboard/request', function () {
    return view('request');
})->middleware(['auth',  'can:accessUser'])->name('request');

Route::get('/dashboard/friend', function () {
    return view('friend');
})->middleware(['auth',  'can:accessUser'])->name('friend');

/*-------------ADIMINISTRADOR-------------------*/

// route dashboard Admin (AdminPanel)
Route::get('/admin/dashboard', function () {
    $image = Game::where('name','like','%'."Assassin's Creed".'%')->first();
    $urlimage=$image->image;
    
    $image2 = Game::where('name','like','%'."Battlefield IV".'%')->first();
    $urlimage2=$image2->image;
    
    return view('dashboard',['image' => $urlimage],['image2' => $urlimage2]);

})->middleware(['auth',  'can:accessAdmin'])->name('adminDashboard');

Route::get('/admin/dashboard/request', function () {
    return view('request');
})->middleware(['auth',  'can:accessAdmin'])->name('request');

Route::resource('admin/dashboard/Import', GameImportController::class);
//mails
Route::get('/send-email', [PostController::class, 'sendEmail']);


Route::resource('userUpdate', ProfileController::class);

//Auth::routes(['verify'=> true]);

//Route::get('/home','HomeController@index')->name('home')->middleware('verified');


Route::get('admin/dashboard/file-import-export-game-genre', [Game_GenreController::class, 'fileImportExport']);
Route::post('admin/dashboard/file-import-game-genre', [Game_GenreController::class, 'fileImport'])->name('file-import-game-genre');

Route::get('admin/dashboard/file-import-export-platforms', [PlatformController::class, 'fileImportExport']);
Route::post('admin/dashboard/file-import-platforms', [PlatformController::class, 'fileImport'])->name('file-import-platforms');
Route::get('admin/dashboard/file-import-export-games', [GameController::class, 'fileImportExport']);
Route::post('admin/dashboard/file-import-games', [GameController::class, 'fileImport'])->name('file-import-games');



/*Route::resource('admin/dashboard/Import', GameImportController::class);

Route::resource('admin/dashboard/RankingAdmin.index', GameController::class);
*/

Route::get('/admin/dashboard/friend', function () {
    return view('friend');
})->middleware(['auth',  'can:accessAdmin'])->name('friend');
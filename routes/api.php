<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamerliController;
use App\Models\User;
use App\Models\Game;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// Delete game.
Route::get('/ranking/delete/{id}', function (Request $request) {
    $game = new GamerliController;
    return $game->destroy($request->route('id'));
});


// Create new game.
Route::get('/ranking/create/{name}/{surname}', function (Request $request) {
    $game = new GamerliController;
    return $game->store(json_encode([  "name" => rawurldecode($request->route('name')),
                                        "surname" => rawurldecode($request->route('surname'))]));
});

// Show all game.
Route::get('/ranking/updateTable', function (Request $request) {
    $game = new GamerliController;
    return $game->index();
});
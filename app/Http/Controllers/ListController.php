<?php

namespace App\Http\Controllers;
use APP\Models\User;
use APP\Models\Gamelist;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function index()
    {
    $publiclists = DB::table('users')
    ->leftJoin('gamelists', 'user.id', '=', 'gamelists.user_id')->where("visibility", 1)->get();
    return view('publicList'['publiclists' => $publiclists]);
    }
}

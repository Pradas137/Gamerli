<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use App\Models\Gamelist;


class PublicListController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$publicList = DB::table('users')
        ->join('gamelists', 'users.id', '=', 'gamelists.user_id')
        ->join('game_gamelist', 'game_gamelists.gamelist_id', '=', 'gamelists.id')
        ->join('games', 'game_gamelist.game_id', '=', 'games.id')
        ->select('gamelists.*', 'games.name')
        ->where("visibility", 1)->orderBy('id','desc')->paginate(5);*/

       
        $publicList = Gamelist::where('visibility',0)->paginate(3);
        return view('publicList', ['publicList' => $publicList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games = DB::table('platforms')
            ->join('games', 'platforms.id', '=', 'games.platform_id')
            ->select('platforms.*', 'games.platform_id')->groupBy('name')->get();
            return view('ranking.create', ['games' => $games]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Game::create($request->all());
        return redirect()->route('ranking.index')
                        ->with('success','Game created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GameList $list)
    {
        return view('showpublic',['list' => $list]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gamelist $list)
    {
        return view('publicList',['list' => $list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gamelist $list)
    {
    
        $list->update($request->all());
        return redirect()->route('publicList')
                        ->with('success','Game updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameList $list)
    {
        $list->delete();
    
        return redirect()->route('publicList')
                        ->with('success','Game deleted successfully');
    }
}
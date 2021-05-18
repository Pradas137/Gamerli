<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use App\Models\Gamelist;
use App\Models\Game_Gamelist;

use Illuminate\Support\Facades\Auth;

class MyListController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$mylist = DB::table('users')
        ->join('gamelists', 'users.id', '=', 'gamelists.user_id')
        ->join('game_gamelist', 'game_gamelists.gamelist_id', '=', 'gamelists.id')
        ->join('games', 'game_gamelist.game_id', '=', 'games.id')
        ->where("visibility", 1)->orderBy('id','desc')->paginate(5);*/
        $publiclist = Gamelist::where('visibility',0)->paginate(3);

        $mylist = Gamelist::where('visibility',1)->paginate(3);
        return view('myList', ['mylist' => $mylist],['publiclist' => $publiclist]);
    }

        //$rankings = Game::latest()->paginate(5);
        //
        //return json_decode($request->header("filter"),TRUE);
        //if (isset($request->header("filter"))){
        //}else{//}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$list = DB::table('gamelists')
        ->join('game_gamelist', 'gamelists.id', '=', 'game_gamelist.gamelist_id')
        ->select('gamelists.*', 'game_gamelist.gamelist_id')->groupBy('gamelist_id')->get();*/

        $games = Game::all();
        return view('createList', ['games' => $games]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Game_Gamelist $id)
    {
        $namelist = $request->namelist;
        $select = $request->select;
        $visibility = $request->visibility;
        $user_id = Auth::user()->id;
        /*$game_id = Game_Gamelist::find($id);
        $gamelist_id = Game_Gamelist::find($id);*/

        $gamelist = new Gamelist(["name"=>$namelist,"user_id"=>$user_id,"visibility"=>$visibility]);
        $gamelist->save();

        /*$game_gamelist = new Game_Gamelist(["game_id" => $game_id,"gamelist_id"=> $gamelist_id]);
        $game_gamelist->save();*/

        return view('myList')->with('success','Game created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lista = GameList::find($id);
        return view('showpublic',['list' => $lista]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gamelist $list)
    {
        return view('myList',['list' => $list]);
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
        return redirect()->route('myList')
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
        return redirect()->route('myList')
                        ->with('success','Game deleted successfully');
    }
}
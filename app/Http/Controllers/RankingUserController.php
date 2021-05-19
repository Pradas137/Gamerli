<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use App\Models\Platform;

class RankingUserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*if($request->filter){
            // There is some filter present!
            $filters = json_decode($request->filter, true);				
            $filters = is_array($filters) ? $filters : array($filters);
            
            $allowed_filters = ["name", "pegi", "developer", "saga", "order_name", "order_pegi", "order_developer", "order_saga"];
            
            if(sizeof(array_diff(array_keys($filters), $allowed_filters)) == 0){
                $rankings = Games::select("games.id", "games.name", "games.pegi", "games.developer", "games.saga");
                foreach($filters as $filter => $value){
                    if($filter == "name"){
                        $rankings->where("games.firstname", $value);
                    }
                    elseif($filter == "pegi"){
                        $rankings->where("games.pegi", $value);
                    }
                    elseif($filter == "saga"){
                        $rankings->where("games.saga", $value);
                    }
                    elseif($filter == "order_name"){
                        if($value == "DESC"){
                            $rankings->orderBy('games.name', 'DESC');
                        }
                        else{
                            $rankings->orderBy('games.name', 'ASC');
                        }
                    }
                    elseif($filter == "order_pegi"){
                        if($value == "DESC"){
                            $rankings->orderBy('games.pegi', 'DESC');
                        }
                        else{
                            $rankings->orderBy('games.pegi', 'ASC');
                        }
                    }
                    elseif($filter == "order_saga"){
                        if($value == "DESC"){
                            $rankings->orderBy('games.saga', 'DESC');
                        }
                        else{
                            $rankings->orderBy('games.saga', 'ASC');
                        }
                    }
                }
                $data = $rankings->paginate(5)->onEachSide(2);
            }
        }
        else{
            $data = Game::select("games.id", "games.name", "games.pegi", "games.developer", "games.saga")->paginate(5)->onEachSide(2);
        }

return response()->json($data);
}*/
        /*$rankings = Game::where([
            ['name','!=', NULL],
            [function ($query) use ($request){
                if (($game = $request->gmdate)){
                    $query->orWhere('name','%'.$game.'%')->get();
                }
            }]
        ])
        ->orderBy("id", "desc")
        ->paginate(5);*/
        $rankingsUser = Game::latest()->orderBy("id", "ASC")->paginate(5);
        return view('ranking.index', ['rankingsUser' => $rankingsUser]);

        /*$rankings = Platform::join('games', 'games.platform_id', '=', 'platforms.id')->orderBy('platform_id','desc')->paginate(5);
        return view('ranking.index', ['rankings' => $rankings]);*/
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
        $rankingUser = DB::table('platforms')
            ->join('games', 'platforms.id', '=', 'games.platform_id')
            ->select('platforms.*', 'games.platform_id')->groupBy('platforms.name')->get();
            //return view('ranking.create', ['ranking' => $ranking]);
            
        $genres = DB::table('games')
            ->join('game_genre', 'games.id', '=', 'game_genre.game_id')
            ->join('genres','genres.id','=','game_genre.genre_id')
            ->select('genres.*', 'game_genre.genre_id')->groupBy('name')->get();
            return view('ranking.create', ['rankingUser' => $rankingUser,'genres' => $genres]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Game $rankingUser)
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
    public function show(Game $rankingUser)
    {
        return view('ranking.show',compact('rankingUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $rankingUser)
    {
        return view('ranking.edit',compact('rankingUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $rankingUser)
    {
    
        $rankingUser->update($request->all());
        return redirect()->route('ranking.index')
                        ->with('success','Game updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $rankingUser)
    {
        $rankingUser->delete();
    
        return redirect()->route('ranking.index')
                        ->with('success','Game deleted successfully');
    }
}
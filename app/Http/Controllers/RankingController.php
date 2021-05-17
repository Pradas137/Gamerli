<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rankings = Game::where([
            ['name','!=', NULL],
            [function ($query) use ($request){
                if (($game = $request->gmdate)){
                    $query->orWhere('name','%'.$game.'%')->get();
                }
            }]
        ])
        ->orderBy("id", "desc")
        ->paginate(5);
        return view('ranking.index', ['rankings' => $rankings]);

        //$rankings = Game::latest()->paginate(5);
        //
        //return json_decode($request->header("filter"),TRUE);
        //if (isset($request->header("filter"))){
        //}else{//}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ranking.create');
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
    public function show(Game $ranking)
    {
        return view('ranking.show',compact('ranking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $ranking)
    {
        return view('ranking.edit',compact('ranking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $ranking)
    {
    
        $ranking->update($request->all());
    
        return redirect()->route('ranking.index')
                        ->with('success','Game updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $ranking)
    {
        $ranking->delete();
    
        return redirect()->route('ranking.index')
                        ->with('success','Game deleted successfully');
    }
}
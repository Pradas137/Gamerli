<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;


class ToInvitedController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*$request*/)
        {
    
           $rankings = Game::latest()->paginate(8);
           return view('ToInvited.indexInvited', ['rankings' => $rankings]);
            
           
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
            return view('ToInvited.createInvited');
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
            return redirect()->route('ToInvited.indexInvited')->with('success','Game created successfully.');
    
        }
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Game $ranking)
        {
            return view('ToInvited.showInvited',compact('ranking'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(Game $ranking)
        {
            return view('ToInvited.editInvited',compact('ranking'));
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
        
            return redirect()->route('ToInvited.indexInvited')
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
        
            return redirect()->route('ToInvited.indexInvited')
                            ->with('success','Game deleted successfully');
        }
    }
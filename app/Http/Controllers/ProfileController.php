<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*$request*/)
        {
    
           $users = User::latest()->paginate(5);
            return view('profile.index', ['profile' => $users]);
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
            return view('profile.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
        
            User::create($request->all());
            return redirect()->route('profile.index')
                            ->with('success','User created successfully.');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(User $user)
        {
            return view('profile.show',compact('user'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(User $user)
        {
            return view('profile.edit',compact('user'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, User $user)
        {
        
            $user->update($request->all());
        
            return redirect()->route('Profile.index')
                            ->with('success','User updated successfully');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(User $user)
        {
            $user->delete();
        
            return redirect()->route('profile.index')
                            ->with('success','User deleted successfully');
        }
}
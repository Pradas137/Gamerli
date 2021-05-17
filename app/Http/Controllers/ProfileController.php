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
    
            $users = User::All();
            return view('profile', ['users' => $users]);
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
            return view('profile');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
    {
        //

        $user = Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $path = $request->file('avatar');//->getRealPath();
        $logo = file_get_contents($path);
        $base64 = base64_encode($logo);
        $user->avatar = $base64;
        $user->save();


        $users = User::orderBy('created_at','ASC')->get();
        return view("profile",["user" =>$users])->with('success','Post created successfully!');
    }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(User $user)
        {
            return view('profile',compact('user'));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit(User $user)
        {
            return view('profileEdit',compact('user'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request){

            $name = $request->input('name');
            $surname = $request->input('surname');
            $editid = $request->input('editid');
        
            if($name !='' && $surname != ''){
              $data = array('name'=>$name,"surname"=>$surname);
        
              // Call updateData() method of Page Model
              Page::updateData($editid, $data);
              echo 'Update successfully.';
            }else{
              echo 'Fill all fields.';
            }
            exit; 
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
        
            return redirect()->route('profile')
                            ->with('success','User deleted successfully');
        }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    //

    public function store(Request $request)
    {
        //

        $user = Auth::user();
        $path = $request->file('image')->getRealPath();
        $logo = file_get_contents($path);
        $base64 = base64_encode($logo);
        $user->avatar = $base64;
        $user->save();
    }

    public function userUpdate( Request $request)
    {
        $userUpdate = [
            'id'            =>  $request->idUpdate,
            'name'          =>  $request->name,
            'surname'       =>  $request->surname,
            'email'         =>  $request->email
        ];
        // return dd($userUpdate);
        DB::table('users')->where('id',$request->idUpdate)->update($userUpdate);
        return redirect()->back()->with('userUpdate','.');
    }
  
}

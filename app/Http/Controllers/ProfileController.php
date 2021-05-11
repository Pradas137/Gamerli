<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    //

    public function getProfile()
    {
        $user = User::find(1);
        return view('profile', compact('user'));
    }

    public function postProfileUpdate(Request $request)
    {
    	$validator = Validator::make($request->all(), [
                		'photo' => 'required|image|mimes:png,jpg,jpeg|max:200',
            		]);

        if ($validator->fails()) {
            return response()
                ->json([
                    'success' => false,
                    'error' =>  $validation->errors()->first()
                ]);
        }

        $user = User::find($request->input('id'));

        if ($request->hasFile('image')) {
            $photo = $request->file('image');

            $fileName = $user->id . "." . $photo->getClientOriginalExtension();
            $request->file('image')->move(public_path(). '/images/'), $fileName);
            $user->update(['image' => $fileName]);
        }

        return ['success'=>true,'message'=>'Successfully updated'];
    }
}
   /* public function ImageUbdate(Request $request)
    {
        //

        $user = Auth::user();
        $path = $request->file('image')->getRealPath();
        $logo = file_get_contents($path);
        $base64 = base64_encode($logo);
        $user->avatar = $base64;
        $user->save();
    }*/
  
}

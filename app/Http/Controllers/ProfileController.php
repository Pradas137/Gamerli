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

    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
  
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('profile', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',

            ]);



    }

    public function updatePhoto(Request $request)
{
    $this->validate($request, [
        'avatar' => 'required|image'
    ]);

    $file = $request->file('avatar');
    $extension = $file->getClientOriginalExtension();
    $fileName = auth()->id() . '.' . $extension;
    $path = public_path('images/users/'.$fileName);

    Image::make($file)->fit(144, 144)->save($path);

    $user = auth()->user();
    $user->avatar = $extension;
    $saved = $user->save();

    $data['success'] = $saved;
    $data['path'] = $user->getAvatarUrl() . '?' . uniqid();

    return $data;
}

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',

            ]);

        $user->name = $request->name;
        $user->surname = $request->surname;

        $user->save();
        return Response::json($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return Response::json($user);
    }
    //

    public function ImageUbdate(Request $request)
    {
        //
        $user = Auth::user();
        $path = $request->file('image')->getRealPath();
        $logo = file_get_contents($path);
        $base64 = base64_encode($logo);
        $user->avatar = $base64;
        $user->save();
    }

    public function search(Request $request){
        
        if($request->ajax()) {
            $data = User::where('name', 'LIKE', $request->country.'%')
                ->get();
            $output = '';
            if (count($data)>0) {  
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">'; 
                foreach ($data as $row){    
                    $output .= '<li class="list-group-item">'.$row->name.'</li>';
                }
                $output .= '</ul>';
            }
            else {
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
            return $output;
        }
    }
  
}

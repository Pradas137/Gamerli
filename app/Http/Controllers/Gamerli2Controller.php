<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Gamerli2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rankings = User::latest()->paginate(5);
        return view('ranking', compact('rankings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function search()
    {
        $search = $_GET['query'];
        $ranking = User::where('name','LIKE', '%'.$search.'%')->get();
        return view('ranking', compact('rankings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($info)
    {
        // Decode the JSON data
        $data = json_decode($info, true);

        // Insert the new data into the table
        $ranking = DB::insert('insert into users (name, surname, email) values (?, ?, ?, ?, ?, ?)', $data['name'], $data['surname'],$data['email']);

        if($ranking == 1) {
            $id = DB::getPDO()->lastInsertId();
            return response()->json(["status" => "success", "message" => "Success! term created", "id" => $id]);
        }

        else {
            return response()->json(["status" => "failed", "message" => "Alert! term not created"]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $game)
    {
        return view('game.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($game_id) {
        User::where("id", $game_id)->update(["active" => 0]);
        $ranking = Users::where("id", $user_id)->delete();
        if($ranking == 1) {
            return response()->json(["status" => "success", "message" => "Success! Terms deleted"]);
        }

        else {
            return response()->json(["status" => "failed", "message" => "Alert! Terms not deleted"]);
        }
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class GamerliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rankings = User::latest()->paginate(5);
        return view('ranking', ['rankings' => $rankings]);
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
        $game = DB::insert('insert into users (name, surname) values (?, ?)', [$data['name'], $data['surname']]);

        if($game == 1) {
            $user_id = DB::getPDO()->lastInsertId();
            return response()->json(["status" => "success", "message" => "Success! ranking created", "id" => $id]);
        }

        else {
            return response()->json(["status" => "failed", "message" => "Alert! ranking not created"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
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
    public function update($info)
    {
        // Decode the JSON data
        $info = json_decode($info, true);

        // Look for the term with the provided ID, and update all fields.
        $game   = User::where("id", $info["id"])
                ->update(["name" => $info["name"],
                          "surname" => $info["surname"]]);

        if($game == 1) {
            return response()->json(["status" => "success", "message" => "Success! Game updated"]);
        }

        else {
            return response()->json(["status" => "failed", "message" => "Alert! Game not updated"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id) {
        User::where("id", $user_id)->update(["active" => 0]);
        // Soft delete the term with the provided id.
        $game = User::where("id", $user_id)->delete();
        if($game == 1) {
            return response()->json(["status" => "success", "message" => "Success! Game deleted"]);
        }

        else {
            return response()->json(["status" => "failed", "message" => "Alert! Game not deleted"]);
        }
    }
}

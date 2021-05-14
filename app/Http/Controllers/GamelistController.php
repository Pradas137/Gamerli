<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gamelist;

class GamelistController extends Controller
{
    //
  /*  public function __construct(User $id)
    {   
        $this->user = $id;
        //
    }
*/
    public static function create(User $id){

    	$user_id=$id->id;

        $gamelist = new Gamelist;

        $gamelist->name = 'favorites';
        $gamelist->user_id = $user_id;
        $gamelist->save();

    }
}

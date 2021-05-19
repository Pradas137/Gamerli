<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game_Genre;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\Game_GenreImport;

class Game_GenreController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function fileImportExport()
  {
     return view('file-import-export-game-genre');
  }

  public function fileImport(Request $request) 
  {
    Excel::import(new Game_GenreImport, $request->file('file')->store('temp'));

    return back();
  }

    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function show(Game_Genre $Game_Genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function edit(Game_Genre $Game_Genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game_Genre $Game_Genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game_Genre $Game_Genre)
    {
        //
    }


}



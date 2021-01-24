<?php

namespace App\Http\Controllers\cinema;

use App\Http\Controllers\Controller;
use App\Models\cinema\films;
use Illuminate\Http\Request;

class cinemaStarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator=films::paginate(5);
        return view('index',compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newFilm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        \DB::insert("insert into films (name, year,description) values ('".$request->film."',
         '".$request->year."','".$request->description."')");

        $producer = \DB::select("select * from producers WHERE name='".$request->producer."'");
        if(count($producer)<1){
            \DB::insert("insert into producers (name) values('".$request->producer."')");
        }
        $film = \DB::select("select * from films WHERE name='".$request->film."'");
        $filmId=$film[0]->id;

        $producerIDSelect = \DB::select("select * from producers WHERE name='".$request->producer."'");
        $producerId=$producerIDSelect[0]->id;
        \DB::insert("insert into film_producers (film_id,producer_id) values('".$filmId."',
        $producerId)");
        \DB::insert("insert into film_categories (film_id,category_id) values('".$filmId."',
        '".$request->category."')");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('edit');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

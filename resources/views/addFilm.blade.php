@extends('newFilm')

@php
    if(isset($_POST['film']) && $_POST['film'] != "" && isset($_POST['year']) && isset($_POST['description'])
    && isset($_POST['producer']) && $_POST['producer'] =! "" && isset($_POST['category'])
    && $_POST['category']){

    \DB::insert("INSERT INTO films (name,year,description) values ('".$_POST['film']."',
    '".$_POST['year']."', '".$_POST['description']."')" );
    \DB::insert("INSERT INTO producers(name) values('".$_POST['producer']."')");
    \DB::insert("INSERT INTO categories(name) values('".$_POST['category']."')");




        /*$selectFilms= \DB::select("select * from films Where name='".$_POST['film']."'");
        foreach ($selectFilms as $films) {
            $film_id=$films->id;*/

      //  $nameproducer=\DB::table('producers')->where('id', $producerId)->first();




    }

@endphp

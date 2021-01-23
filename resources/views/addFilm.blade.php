@extends('newFilm')

@php
    if(isset($_POST['film']) && $_POST['film'] != "" && isset($_POST['year']) && isset($_POST['description'])
    && isset($_POST['category'])
    && $_POST['category']){

    \DB::insert("INSERT INTO films (name,year,description) values ('".$_POST['film']."',
    '".$_POST['year']."', '".$_POST['description']."')" );
$selectFilms= \DB::select("select * from films Where name='".$_POST['film']."'");
        foreach ($selectFilms as $films) {
            $film_id=$films->id;
        }


\DB::insert("INSERT INTO producers(name) values('".$_POST['producer']."')");
\DB::insert("INSERT INTO film_categories(film_id,category_id) values('".$film_id."','".$_POST['category']."')");





        /*$selectFilms= \DB::select("select * from films Where name='".$_POST['film']."'");
        foreach ($selectFilms as $films) {
            $film_id=$films->id;*/

      //  $nameproducer=\DB::table('producers')->where('id', $producerId)->first();




    }


@endphp

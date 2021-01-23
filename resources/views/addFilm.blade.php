@extends('newFilm')

@php
    if(isset($_POST['film']) && $_POST['film'] != "" && isset($_POST['year']) && isset($_POST['description'])
    && isset()

){
    \DB::insert("INSERT INTO films (name,year,description) values ('".$_POST['film']."','".$_POST['year']."', '".$_POST['description']."')" );
        $selectFilms= \DB::select("select * from films Where name='".$_POST['film']."'");
        foreach ($selectFilms as $films) {
            $film_id=$films->id;
        }

    }

@endphp

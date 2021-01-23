@extends('add_newCategory')
@php
    if(isset($_POST['Category']) && $_POST['Category'] != "" ){
    \DB::insert("INSERT INTO categories (name) values ('".$_POST['Category']."')");
}
@endphp

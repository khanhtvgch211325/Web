
@extends('layouts.app')
@section('title','Furniture Index')
@section('main')
<form action="/categories" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <input type="submit" value="Create">
</form>
@endsection
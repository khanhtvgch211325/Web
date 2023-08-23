
@extends('layouts.app')
@section('title','Create Category')
@section('main')
<form action="/categories" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control">
    <br>
    <input type="submit" value="Create" class="btn btn-primary" >
</form>
@endsection
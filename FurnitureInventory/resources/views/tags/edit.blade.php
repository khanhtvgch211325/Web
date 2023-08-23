
@extends('layouts.app')
@section('title','Edit Tag')
@section('main')
<form action="/tags/{{ $tag->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$tag->name}}" class="form-control">
    <br>
    <input type="submit" value="Edit" class="btn btn-primary" >
</form>
@endsection
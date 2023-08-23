
@extends('layouts.app')
@section('title','Edit Category')
@section('main')
<form action="/categories/{{ $category->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control">
    <br>
    <input type="submit" value="Edit" class="btn btn-primary" >
</form>
@endsection

@extends('layouts.app')
@section('title','Furniture Index')
@section('main')
<form action="/products/{{ $product->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{$product->title}}">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{$product->description}}">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{$product->price}}">
    <br>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity" value="{{$product->quantity}}">
    <br>
    <label for="year">Year</label>
    <input type="text" name="year" id="year" value="{{$product->year}}">
    <br>
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple>
        @foreach($tags as $tag)
            <option value="{{$tag->id}}" @if(in_array($tag->id, $product->tags->pluck('id')->toArray())) selected @endif>{{$tag->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Edit">
</form>
@endsection
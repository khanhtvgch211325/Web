
@extends('layouts.app')
@section('title','Edit Funiture')
@section('main')
<form action="/products/{{ $product->id }}" method="post" class="table table-striped">
    @method('PUT')
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{$product->title}}"class="form-control">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{$product->description}}"class="form-control">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{$product->price}}"class="form-control">
    <br>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity" value="{{$product->quantity}}"class="form-control">
    <br>
    <label for="year">Year</label>
    <input type="text" name="year" id="year" value="{{$product->year}}"class="form-control">
    <br>
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id"class="form-control">
        @foreach($categories as $category)
            <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple class="form-control">
        @foreach($tags as $tag)
            <option value="{{$tag->id}}" @if(in_array($tag->id, $product->tags->pluck('id')->toArray())) selected @endif>{{$tag->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Update">
</form>
@endsection
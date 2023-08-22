
@extends('layouts.app')
@section('title','Furniture Index')
@section('main')
<form action="/products" method="post" enctype="multipart/form-data" class="table table-striped">
    @csrf
    <div class="mb-3 col-lg-12">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" >
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description"class="form-control" >
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price"class="form-control" >
    <br>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity"class="form-control" >
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image"class="form-control" >
    <br>
    <label for="year">Year</label>
    <input type="text" name="year" id="year"class="form-control" >
    <br>
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id"class="form-control" >
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="tags">Tags</label>
    <select name="tags[]" id="tags" multiple class="form-control" >
        @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Create">
    </div>
</form>
@endsection
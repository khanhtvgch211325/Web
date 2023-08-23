@extends('layouts.app')
@section('title','Furniture Index')
@section('main')
<img src="https://luxfuni.vn/wp-content/uploads/2022/03/slide-1-1920x840.jpg" height="440" width="1920" alt="" class="slider-515 slide-1253" title="slide-1" draggable="false">
<table style="border:1px solid ;text-align:center; " class="col-lg-12  table table-striped ">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Image</th>
        <th>Title</th>
        <th>Price</th>
        <th>quantity</th>
        <th>Description</th>
        <th>Year</th>
        <th>Category</th>
        <th>Tags</th>
        <th>Action</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td><img src="{{ asset($product->image) }}" class="image" alt="Product Image" style="width: 100px; height: 100px"></td>
        <td>{{ $product->title }}</td>
        <td>{{ $product->price}}</td>
        <td>{{ $product->quantity}}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->year }}</td>
        <td><a href="/categories/{{$product->category->id}}">{{ $product->category->name }}</a></td>
        <td>
            @foreach($product->tags as $tag)
            <a href="/tags/{{$tag->id}}">{{ $tag->name }}</a>
            @endforeach
        </td>
        <td>
            <a href="/products/{{$product->id}}/edit" class="btn btn-warning">Edit</a>
            <form action="/products/{{ $product->id }}" method="post" style="display: inline">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?');">
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div style="position: absolute;
    right: 10%; ">
    <a href="/products/create" class="btn btn-success">Add product</a>
    <a href="/categories/create" class="btn btn-success">Add Category</a>
    <a href="/tags/create" class="btn btn-success">Add Tags</a>
</div>

@endsection



        
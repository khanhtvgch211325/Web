@extends('layouts.app')
@section('title','Show Furniture ')
@section('main')
{{$product->id}}<br>
{{$product->title}}<br>
{{$product->description}}<br>
{{$product->price}}<br>
{{$product->image}}<br>
{{$product->quantity}}<br>
{{$product->year}}

@endsection

@extends('layouts.app')
@section('title','Furniture Index')
@section('main')
<form action="/register" method="post"  >
    @csrf
   
    <label for="name"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>
      <label for="email"><b>Phone Number</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
    <input type="submit" value="Register">
</form>
@endsection


@extends('layouts.app')
@section('title','Login Form')
@section('main')
<form action="/login" method="post" class="container" >
    @csrf
    <!-- <input type="text" name="name" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login"> -->
    <div class="container">
      <label for="name"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" >Login</button>
     
    </div>
</form>
@endsection

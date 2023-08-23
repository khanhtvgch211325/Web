
@extends('layouts.app')
@section('title','Furniture Index')
@section('main')
<form action="/register" method="post"  >
    @csrf
   
   
    <h3 class="text-center text-white pt-5">Register form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">Username:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                              
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</form>
@endsection

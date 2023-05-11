@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="/login" method="POST">
          @csrf
          <div class="form-group">
            <label for="emailInput" class="font-weight-bold">Email</label>
            <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="passwordInput" class="font-weight-bold">Password</label>
            <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Login</button>
        </form>
      </div>
    </div>
  </div>
  
  
  
@endsection
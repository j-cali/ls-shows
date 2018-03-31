@extends('layouts.master')

@section('title', 'Register')

@section('content')

  <div class="jumbotron row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3">
      <form method="POST" action="/register">
        {{ csrf_field() }}
        <h1>Sign Up</h1>
        <hr>
        <!-- FORM INFO -->
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">username</span>
          </div>
          <input type="text" id="name" name="name" class="form-control input-lg" placeholder="User Name" tabindex="1" required>
        </div>

        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">e-mail</span>
          </div>
          <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email Address" tabindex="2" required>
        </div>

        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">password</span>
          </div>
          <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="3" required>
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 offset-lg-2 offset-md-2 offset-sm-2">
          <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="4">
        </div>

        @include('layouts.errors')
      </form>
    </div>
  </div>
@endsection
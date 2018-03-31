@extends('layouts.master')

@section('title', 'Login')

@section('content')

  <div class="jumbotron row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3">
      <form method="POST" action="/login">
        {{ csrf_field() }}
        <h1>Login</h1>
        <hr>
        <!-- FORM INFO -->
        <div class="input-group mb-4">
          <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">e-mail</span>
          </div>
          <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email" tabindex="1">
        </div>

        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">password</span>
          </div>
          <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="2">
        </div>

        <div class="col-sm-8 col-md-8 col-lg-8 offset-lg-2 offset-md-2 offset-sm-2">
          <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="3">
        </div>

        @include('layouts.errors')
      </form>
    </div>
  </div>
@endsection
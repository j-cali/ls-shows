@extends('layouts.master')

@section('title', 'TV Show List Management')

@section('content')
  <div class="jumbotron row">
    <h2>Hello, {{ Auth::user()->name }}!</h2>
    <hr>
  </div>
  <div class="row">
    <p>Something here.</p>
  </div>

@endsection

@extends('layouts.master')

@section('title', Config::get('app.subtitle') )

@section('content')

	<div class="jumbotron row">
		<!-- JUMBOTRON TEXT -->
	  <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 offset-lg-1">
	    <h1>ls-shows</h1>
	    <hr>
	    <p class="font-italic">ls-shows (list shows)</p>
	    <p class="lead">Sign up now and start adding to your list!</p>
	    <ul>
	    	<li>add shows</li>
	    	<li>rating system</li>
	    	<li>... many more to come!</li>
	    </ul>
	    <div id="valid-signup"></div>
	  </div>

		<!-- MAIN FORM CONTAINER -->
	  <div class="col-xs-10 col-sm-8 col-md-8 col-lg-6">
	  	<img src="/img/tv.png" alt="tv" width="65%"  class="img-fluid mx-auto d-block">
	  </div>
	</div>
@endsection

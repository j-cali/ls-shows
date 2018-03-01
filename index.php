<?php 
// page title
$title = 'ls-shows';

// include header template
require('layout/header.php');
?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-light mb-4" style="background-color: #00997a;">
   <a class="navbar-brand" href=".">ls-shows</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
   		aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
   	<span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href=".">Home<span class="sr-only">(current)</span></a>
         </li>
      </ul>
   </div>
</nav>

<!-- MAIN CONTENT -->
<div class="container">
   <div class="jumbotron row">
      <div class="col-xs-2 col-sm-4 col-md-4 col-lg-4 offset-lg-1">
         <h1>ls-shows</h1>
         <p class="lead">Sign up now and start adding to your list!</p>
      </div>
      <div class="col-xs-10 col-sm-8 col-md-8 col-lg-6">
         <form role="form" method="post" action="" autocomplete="off">
            <p>Already a member? <a href='.'>Login</a></p>
            <hr>
            <div class="form-group">
               <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" 
               		value="" tabindex="1">
            </div>
            <div class="form-group">
               <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" 
               		value="" tabindex="2">
            </div>
            <div class="row">
               <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                     <input type="password" name="password" id="password" class="form-control input-lg" 
                     	placeholder="Password" tabindex="3">
                  </div>
               </div>
               <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                     <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" 
                     	placeholder="Confirm Password" tabindex="4">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" 
               		class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
            </div>
         </form>
      </div>
   </div>
</div>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
//include header template
require('layout/footer.php');
?>

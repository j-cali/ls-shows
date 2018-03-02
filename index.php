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
         <div id="valid-signup"></div>
      </div>
      
      
      <!-- MAIN FORM CONTAINER -->
      <div class="col-xs-10 col-sm-8 col-md-8 col-lg-6">
         <form id="user-form" role="form" autocomplete="off" class="needs-validation" novalidate>
            <p>Already a member? <a href='.'>Login</a></p>
            <hr>
                        
            <!-- FORM INFO -->
            <div id="username-div" class="input-group mb-4">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">username</span>
			  </div>				
              <input type="text" name="username" id="username" class="form-control input-lg" 
              	placeholder="User Name" tabindex="1">
              	<div id="err-msg-username" class="invalid-feedback"></div>
            </div>
            
            <div id="email-div" class="input-group mb-4">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">e-mail</span>
			  </div>
               <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" 
               		tabindex="2">
               <div id="err-msg-email" class="invalid-feedback"></div>
            </div>
            
            <div id="password-div" class="input-group mb-4">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">password</span>
			  </div>
              	<input type="password" name="password" id="password" class="form-control input-lg" 
                     	placeholder="Password" tabindex="3">
               <div id="err-msg-password" class="invalid-feedback"></div>
            </div>
    
                      
            <div class="row">
               <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" 
               		class="btn btn-primary btn-block btn-lg" tabindex="4"></div>
            </div>
         </form>
      </div>
   </div>
</div>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/form_post.js"></script>
<?php
//include header template
require('layout/footer.php');
?>

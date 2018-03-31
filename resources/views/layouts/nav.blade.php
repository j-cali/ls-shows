  <nav class="navbar navbar-expand-md navbar-light mb-4" style="background-color: #00997a;">
    <a class="navbar-brand" href=".">ls-shows</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse my-2" id="navbarCollapse">
      @if (Auth::check())
        <!-- <span class="btn btn-light ml-auto mr-3">{{ Auth::user()->name }}</span>
        <a class="btn btn-primary mr-3" href="logout">Logout</a> -->

        <div class="dropdown show ml-auto mr-3">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" style="right:0;left:auto;" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="logout">Logout</a>
          </div>
        </div>                
      @else
        <a class="btn btn-light ml-auto mr-3" href="login">Login</a>
        <a class="btn btn-primary mr-3" href="register">Sign Up</a>     
      @endif
    </div>
  </nav>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest', ['except' => 'destroy']);
    }

    public function index() 
    {
      return view('login');
    }

    public function store()
    {
      $this->validate(request(), [
        'email' => 'required|email',
        'password' => 'required'
      ]);

      if (! auth()->attempt(request(['email', 'password'])))
      {
        return back()->withErrors(['message' => 'Wrong e-mail or password.']);
      }

      return redirect()->home();
    }

    public function destroy() 
    {
      auth()->logout();

      return redirect()->home();
    }
}

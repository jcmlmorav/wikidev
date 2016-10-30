<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller {

  public function overview()
  {
    return view('overview');
  }

  public function post()
  {
    return view('post');
  }

  public function category()
  {
    return view('category');
  }

  public function login()
  {
    return view('login');
  }

  public function register()
  {
    return view('register');
  }

  public function passwordRecovery()
  {
    return view('password-recovery');
  }

  public function logout()
  {
    Auth::logout();
    return redirect('acceder');
  }

  public function profile()
  {
    $user = Auth::user();
    $data = array(
      'name'      => $user->name,
      'last_name' => $user->last_name,
      'photo'     => $user->photo,
      'username'  => $user->username,
      'email'     => $user->email,
      'biography' => $user->biography
    );
    return view('profile', $data);
  }

}

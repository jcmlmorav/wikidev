<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DataController extends Controller {

  public function registerUser(Request $request)
  {
    $user = new User;
    $user->username = $request->username;
    $user->email    = $request->email;
    $user->password = Hash::make($request->password);
    $user->role     = 2;
    $user->save();
    echo $user->id;
  }

  public function loginUser(Request $request)
  {
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
      return redirect()->route('profile');
    } else {
      return redirect()->route('login')->with('status', 'Correo electrónico o contraseña incorrectos');
    }
  }

  public function updateUser(Request $request)
  {
    $user = Auth::user();
    $update = false;
    if($request->has('first_name')) {
      $user->name = $request->first_name;
      $update = true;
    }
    if($request->has('last_name')) {
      $user->last_name = $request->last_name;
      $update = true;
    }
    if($request->has('biography')) {
      $user->biography = $request->biography;
      $update = true;
    }
    if($request->has('password')) {
      $user->password = Hash::make($request->password);
      $update = true;
    }
    if($request->hasFile('photo')) {
      if($request->file('photo')->isValid()) {
        $request->photo->move(public_path('photos'), $user->username . '.' . $request->photo->getClientOriginalExtension());
        $user->photo = url('/photos') . '/' . $user->username . '.' . $request->photo->getClientOriginalExtension();
        $update = true;
      }
    }
    if($update) {
      if($user->save()) {
        return redirect()->route('profile');
      } else {
        return redirect()->route('profile')->with('status', 'No se pudo actualizar la información. Intentelo nuevamente');
      }
    }

  }

}

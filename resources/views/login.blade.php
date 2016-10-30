@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="row">
      <form method="POST" action="{{ URL::route('loginUser') }}" class="col s12 m6 offset-m3 l6 offset-l3" autocomplete="off">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <input id="email" name="email" type="email" class="validate" required>
            <label for="email">Correo electrónico <sup>*</sup></label>
          </div>
          <div class="input-field col s12 m12 l12">
            <input id="password" name="password" type="password" class="validate" required>
            <label for="password">Contraseña <sup>*</sup></label>
          </div>
          <button class="btn waves-effect waves-light right light-blue darken-2" type="submit" name="action">Acceder
            <i class="material-icons right">send</i>
          </button>
        </div>
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
      </form>
    </div>
    <div class="row">
      <div class="col s12 m6 offset-m3 l6 offset-l3">
        <p><a class="orange-text text-accent-4" href="{{ URL::route('register') }}">Registrar usuario</a></p>
        <p><a class="orange-text text-accent-4" href="{{ URL::route('passwordRecovery') }}">Recuperar contraseña</a></p>
      </div>
    </div>
  </div>
@endsection

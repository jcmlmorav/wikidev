@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="row">
      <form class="col s12 m6 offset-m3 l6 offset-l3" autocomplete="off">
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <input id="email" name="email" type="email" class="validate" required>
            <label for="email">Correo electrónico</label>
          </div>
          <button class="btn waves-effect waves-light right light-blue darken-2" type="submit" name="action">Recuperar cuenta
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
    <div class="row">
      <div class="col s12 m6 offset-m3 l6 offset-l3">
        <p><a class="orange-text text-accent-4" href="{{ URL::route('login') }}">Acceder</a></p>
        <p><a class="orange-text text-accent-4" href="{{ URL::route('register') }}">Registrar usuario</a></p>
      </div>
    </div>
  </div>
@endsection

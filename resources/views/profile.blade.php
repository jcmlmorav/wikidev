@extends('layouts.app')

@section('content')
<div class="section">
  <div class="row">
    <form method="POST" action="{{ URL::route('updateUser') }}" enctype="multipart/form-data" class="col s12 m12 l12">
      {{ csrf_field() }}
      <div class="row">
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        <div class="file-field input-field col s12 m8 offset-m2 l8 offset-l2">
          <img src="{{ $photo }}" alt="" />
          <div class="clearfix"></div>
          <div class="btn light-blue darken-2">
            <span>Cambiar imagen</span>
            <input type="file" id="photo" name="photo">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <div class="input-field col s12 m6 l6">
          <input id="first_name" name="first_name" type="text" value="{{ $name }}">
          <label for="first_name">Nombres</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <input id="last_name" name="last_name" type="text" value="{{ $last_name }}">
          <label for="last_name">Apellidos</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <input id="username" disabled name="username" type="text" class="validate" value="{{ $username }}">
          <label for="username">Nombre de usuario</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <input id="email" disabled name="email" type="email" class="validate" value="{{ $email }}">
          <label for="email">Correo electrónico</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <input id="password" name="password" type="password" data-parsley-equalto="#repassword" class="validate">
          <label for="password">Contraseña</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <input id="repassword" name="repassword" type="password" data-parsley-equalto="#password" class="validate">
          <label for="repassword">Repita la contraseña</label>
        </div>
        <div class="input-field col s12 m12 l12">
          <textarea id="biography" name="biography" class="materialize-textarea">{{ $biography }}</textarea>
          <label for="biography">Biografía</label>
        </div>
        <div class="clearfix"></div>
        <button class="btn waves-effect waves-light right light-blue darken-2" type="submit" name="action">Actualizar
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</div>
@endsection

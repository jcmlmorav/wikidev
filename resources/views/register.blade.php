@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="row">
      <form method="POST" action="{{ URL::route('registerUser') }}" class="col s12 m6 offset-m3 l6 offset-l3" autocomplete="off">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <input id="username" name="username" type="text" class="validate" data-parsley-whitespace="trim" required>
            <label for="username">Nombre de usuario</label>
          </div>
          <div class="input-field col s12 m12 l12">
            <input id="email" name="email" type="email" class="validate" required>
            <label for="email">Correo electrónico</label>
          </div>
          <div class="input-field col s12 m12 l12">
            <input id="password" name="password" type="password" class="validate" required>
            <label for="password">Contraseña</label>
          </div>
          <div class="input-field col s12 m12 l12">
            <input id="repassword" name="repassword" type="password" class="validate" data-parsley-equalto="#password" required>
            <label for="repassword">Repite la contraseña</label>
          </div>
          <button class="btn waves-effect waves-light right light-blue darken-2" type="submit" name="action">Registrar usuario
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
    <div class="row">
      <div class="col s12 m6 offset-m3 l6 offset-l3">
        <p><a class="orange-text text-accent-4" href="{{ URL::route('login') }}">Acceder</a></p>
        <p><a class="orange-text text-accent-4" href="{{ URL::route('passwordRecovery') }}">Recuperar contraseña</a></p>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
  $(document).on("ready", function() {
    $("#username").on("blur", function() {
      $(this).val($(this).val().split(" ").join(""));
    });
  });
  </script>
@endsection

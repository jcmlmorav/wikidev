@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="row">
      <form method="POST" action="{{ URL::route('registerPost') }}" enctype="multipart/form-data" class="col s12 m12 l12" autocomplete="off">
        {{ csrf_field() }}
        <div class="row">
          <div class="file-field input-field col s12 m8 l8">
            <div class="btn light-blue darken-2">
              <span>Imagen</span>
              <input type="file" id="photo" name="thumbnail" required>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="input-field col s12 m6 l6">
            <select name="category" required>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label>Seleccione la categoría de la entrada</label>
          </div>
          <div class="input-field col s12 m12 l12">
            <input id="title" name="title" type="text" class="validate" required>
            <label for="title">Titulo <sup>*</sup></label>
          </div>
          <div class="input-field col s12 m12 l12">
            <textarea name="content" class="materialize-textarea" required></textarea>
            <label for="content">Contenido <sup>*</sup></label>
          </div>
          <div class="clearfix"></div>
          <button class="btn waves-effect waves-light right light-blue darken-2" type="submit" name="action">Publicar
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
  </div>
@endsection

@section( 'scripts' )
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection

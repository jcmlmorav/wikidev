@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="col s12 m12 l12">
      <div class="card">
        <div class="card-content">
          <h2><strong>Card Title</strong></h2>
          <p>
            Autor: <strong>Juan Camilo Mora Vélez</strong> <br>
            Fecha: Octubre 21, 2016 <br>
            Categorías: <a href="#">Wordpress</a>, <a href="#">HTML 5</a><br>
            Colaboradores: <strong>Alirio Zapata</strong>, <strong>Carlos Vergara</strong>
          </p>
          <br>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
          <code>
            if($a==0) {
              return;
            }
          </code>
        </div>
      </div>
    </div>
  </div>
@endsection

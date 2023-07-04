@extends('layouts.main')

@section('title', 'Relatorios')

@section('description', 'Relatorios')

@section('content')

<div class="container">
    <!-- <div class="row align-items-start"> -->
    <div class="row row-cols-1 row-cols-md-4 g-2">
      <div class="col">
        <div class="card text-center mb-3" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Implantações finalizadas</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <a href="#" class="btn btn-primary">Gerar relatorio</a>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card text-center mb-3" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Implantações em andamento</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <a href="#" class="btn btn-primary">Gerar relatorio</a>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card text-center mb-3" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Relatorio Personalizado</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <a href="#" class="btn btn-primary">Gerar relatorio</a>
          </div>

        </div>
      </div>

    </div>



  </div>
  
@endsection
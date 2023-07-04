@extends('layouts.main')

@section('title', 'Pagina inicial')

@section('description', 'Pagina inicial')

@section('content')

{{-- <h1>{{$usuario}}</h1> --}}
{{-- <h1>{{$user->name}}</h1> --}}


<div class="container">
    <!-- <div class="row align-items-start"> -->
    <div class="row row-cols-1 row-cols-md-4 g-2">
      <div class="col">
        <div class="card text-center mb-3" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Implantação em andamento</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <a href="/implantacao/implantacaoAndamento" class="btn btn-primary">Implantações</a>
          </div>

        </div>
      </div>

      <div class="col">
        <div class="card text-center mb-3" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Importar planilha de implantacao</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <a href="/relatorio/importarPlanilha" class="btn btn-primary">Importar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center mb-3" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Gerador de relatorios</h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <a href="/agente/relatorio" class="btn btn-primary">Relatorios</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center mb-3" style="width: 14rem;">
          <div class="card-body">
            <h5 class="card-title">Agenda suporte implantação </h5>
            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
            <a href="/agente/calendario" class="btn btn-primary">Agenda</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
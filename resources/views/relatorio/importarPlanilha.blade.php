@extends('layouts.main')

@section('title', 'Importar planilha')

@section('description', 'Importar planilha')

@section('content')

<div class="container">
    <div class="mb-3">
        <label for="formFile" class="form-label"><h1>Importar planilha de migração</h1> </label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</div>

@endsection
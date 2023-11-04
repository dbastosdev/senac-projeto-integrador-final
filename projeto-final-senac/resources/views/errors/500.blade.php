@extends('layouts.guest')

@section('title', 'Página não encontrada')

@section('content')
	<div class="card red lighten-4 z-depth-2">
        <div class="card-content">
            <span class="card-title">Erro no sistema.</span>
            <p class="card-text">
	            Algum erro ocorreu no sistema e não foi possível completar a sua requisição.
            </p>
        </div>
    </div>

    <br>
    <a href="{{ route('home') }}" class="btn waves-light waves-effect">
        <i class="material-icons right" aria-hidden="true">arrow_back</i>
        Voltar
    </a>
@endsection
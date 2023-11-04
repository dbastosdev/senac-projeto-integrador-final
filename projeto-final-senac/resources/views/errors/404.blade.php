@extends('layouts.guest')

@section('title', 'Página não encontrada')

@section('content')
	<div class="card red lighten-4 z-depth-2">
        <div class="card-content">
            <span class="card-title">Página não encontrada</span>
            <p class="card-text">
	            A página requisitada não foi encontrada no sistema.
            </p>
        </div>
    </div>

    <br>
    <a href="{{ route('home') }}" class="btn waves-light waves-effect teal darken-2">
        <i class="material-icons right" aria-hidden="true">arrow_back</i>
        Voltar
    </a>
@endsection
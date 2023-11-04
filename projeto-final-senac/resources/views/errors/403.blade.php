@extends('layouts.guest')

@section('title', 'Permissão Negada')

@section('content')
	<div class="card red lighten-4 z-depth-2">
        <div class="card-content">
            <span class="card-title">Permissão Negada</span>
            <p class="card-text">
            	Seu usuário não possui permissão para acessar essa página. Para solicitar permissão de acesso, entre em contato com a administração do sistema através de <a href="mailto:atendimento@tic.ufrj.br">atendimento@tic.ufrj.br</a>.
            </p>
        </div>
    </div>

    <br>
    <a href="{{ route('home') }}" class="btn waves-light waves-effect">
        <i class="material-icons right" aria-hidden="true">arrow_back</i>
        Voltar
    </a>
@endsection
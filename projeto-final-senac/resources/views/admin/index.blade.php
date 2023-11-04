@extends('admin.layouts.app')

@section('title', 'Painel')

@prepend('breadcrumb-elements')
    <a href="{{ request()->url() }}" class="breadcrumb" aria-current="page">Painel</a>
@endprepend

@section('content')
    <div class="row">
        <div class="col s12">
            <h4 style="color: rgb(125, 125, 125);">
                Meus agendamentos 
            </h4>
        </div>
    </div>
<div class="container">
  <div class="row">
  <div class="row">
    <div class="col s12 cards-container">
        <!-- card -->
       <div class="card  darken-1">
         <div class="card-content black-text">
           <p>AGENDAMENTO</p>
           <span class="card_date_day grey-text">24/12/2023</span>
           <br>
           <span class="card_date_day grey-text">10:00</span>
           <br>
           <br>
           <p>CONTATOS</p>
           <span class="card_date_day grey-text">(21) 3245-3445</span>
           <br>
           <span class="card_date_day grey-text">joanacostura@gmail.com</span>
           <br>
           <br>
           <span class="card-title activator">Ateliê Joana<i class="material-icons right activator">more_vert</i></span>
           <p class="card-title">Especialista em alta costura</p>
           <br>
           <span class="chip blue white-text">R$ 50,00</span>
           <br>
           <br>
           <a class=""><i class="material-icons left">room</i>Rua do Rio, Bangu - Rio de Janeiro - RJ</a>
         </div>
         <div class="card-reveal center">
            <span class="card-title grey-text text-darken-4">Escolha uma nova data<i class="material-icons right">close</i></span>
            <form action="">
                @csrf
                <!-- <input type="text" class="datepicker" style="transform: scale(0.7);"> -->
                <input type="date" name="date" id="date">
                <input class="btn right blue darken" type="submit" value="Reagendar">
            </form>
         </div>
         <div class="card-action center">
           <a href="#">Cancelar</a>
         </div>
        </div>
        <!-- fim card -->
        <!-- card -->
        <div class="card  darken-1">
         <div class="card-content black-text">
           <span class="card_date_day grey-text">23</span>
           <span class="card_date_month grey-text">Mai</span>
           <span class="card-title">Ateliê Joana</span>
           <p>Especialista em alta costura</p>
           <br>
           <span class="chip">corte</span>
           <span class="chip">alta costura</span>
           <br>
           <br>
           <a class=""><i class="material-icons left">room</i>Rua do Rio, Bangu - Rio de Janeiro - RJ</a>
         </div>
         <div class="card-action center">
           <a href="#">Agendar</a>
         </div>
        </div>
        <!-- fim card -->
        <!-- card -->
        <div class="card  darken-1">
         <div class="card-content black-text">
           <span class="card_date_day grey-text">23</span>
           <span class="card_date_month grey-text">Mai</span>
           <span class="card-title">Ateliê Joana</span>
           <p>Especialista em alta costura</p>
           <br>
           <span class="chip">corte</span>
           <span class="chip">alta costura</span>
           <br>
           <br>
           <a class=""><i class="material-icons left">room</i>Rua do Rio, Bangu - Rio de Janeiro - RJ</a>
         </div>
         <div class="card-action center">
           <a href="#">Agendar</a>
         </div>
        </div>
        <!-- fim card -->
    </div>
  </div>
</div>
@endsection

@extends('layouts.guest')

@section('title', 'Página Inicial')

@section('content')

<div class="container">
  <div class="row">
    <div class="col s12">
      <h4 class='text-center'> Os melhores profissionais de moda estão aqui</h4>
      <div class="row">
                <div class="col s12">
                    <nav class="white col s12">
                        <div class="nav-wrapper">
                            <div class="input-field">
                                <input id="buscar" type="search" placeholder="Pesquisar">
                                <label class="label-icon" for="buscar">
                                <i class="material-icons grey-text" aria-hidden="true">search</i></label>
                                <!-- <i class="material-icons" aria-hidden="true" @click="clearSearchField()">close</i> -->
                            </div>
                        </div>
                    </nav>
                </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 cards-container">
        <!-- card -->
        <div class="card  darken-1">
         <div class="card-content black-text">
         @if(auth()->user())
            <p>CONTATOS:</p>
            <span class="card_date_day grey-text">(21) 3245-3445</span>
            <br>
            <span class="card_date_day grey-text">joanacostura@gmail.com</span>
            <br>
            <br>
         @endif
           <span class="card-title">Ateliê Joana</span>
           <p>Especialista em alta costura</p>
           <br>
           <span class="chip">corte</span>
           <span class="chip">alta costura</span>
           <br>
           <br>
           <a class=""><i class="material-icons left">room</i>Rua do Rio, Bangu - Rio de Janeiro - RJ</a>
         </div>
         @if(auth()->user())
            <div class="card-action center activator">
                <a class="card-action center activator">Agendar</a>
            </div>
         @endif
         <div class="card-reveal center">
            <span class="card-title grey-text text-darken-4">Escolha uma nova data<i class="material-icons right">close</i></span>
            <form action="">
                @csrf
                <!-- <input type="text" class="datepicker" style="transform: scale(0.7);"> -->
                <input type="date" name="date" id="date">
                <input class="btn right blue darken" type="submit" value="Agendar">
            </form>
         </div>
        </div>
        <!-- fim card -->
        <!-- card -->
        <div class="card  darken-1">
         <div class="card-content black-text">
         @if(auth()->user())
            <p>CONTATOS:</p>
            <span class="card_date_day grey-text">(11) 2345-3344</span>
            <br>
            <span class="card_date_day grey-text">joanacostura@gmail.com</span>
            <br>
            <br>
         @endif
           <span class="card-title">Ateliê Maria</span>
           <p>Tudo para o seu dia</p>
           <br>
           <span class="chip">modelagem</span>
           <span class="chip">noivas</span>
           <br>
           <br>
           <a class=""><i class="material-icons left">room</i>Rua Rio da Prata, Interlagos - São Paulo - SP</a>
         </div>
         @if(auth()->user())
            <div class="card-action center activator">
                <a class="card-action center activator">Agendar</a>
            </div>
         @endif
         <div class="card-reveal center">
            <span class="card-title grey-text text-darken-4">Escolha uma nova data<i class="material-icons right">close</i></span>
            <form action="">
                @csrf
                <!-- <input type="text" class="datepicker" style="transform: scale(0.7);"> -->
                <input type="date" name="date" id="date">
                <input class="btn right blue darken" type="submit" value="Agendar">
            </form>
         </div>
        </div>
        <!-- fim card -->
    </div>
  </div>
</div>

        
@endsection
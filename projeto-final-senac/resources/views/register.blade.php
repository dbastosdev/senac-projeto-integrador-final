@extends('layouts.guest')

@section('title', 'Página Inicial')

@section('content')
<div class="container">
<div class="row">
    <form class="col s12" id="reg-form">
          <div class="wrapper center">
            <h2>Registre-se</h2>
          </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="email" type="text" class="validate" required>
          <label for="email">Digite seu nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" required>
          <label for="email">Digite seu e-mail</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" minlength="6" required>
          <label for="password">Digite uma senha</label>
        </div>
      </div>
      <div class="row">
        <label>Selecione um perfil</label>
        <select class="browser-default">
          <!-- <option value="" disabled selected>Selecione uma opção</option> -->
          <option value="1">Costureira</option>
          <option value="2">Consumidor</option>
        </select>
      </div>
      <div class="row">
        <!-- <div class="input-field col s6">
          <div class="gender-male">
            <input class="with-gap" name="gender" type="radio" id="male" required />
            <label for="male">Male</label>
          </div>
          <div class="gender-female">
            <input class="with-gap" name="gender" type="radio" id="female" required />
            <label for="female">Female</label>
          </div>
        </div> -->

        <div class="input-field col s6">
          <a href="{{route('thanks')}}" class="btn btn-large btn-register waves-effect waves-light blue darken">Cadastrar
            <i class="material-icons right">done</i>
          </a>
        </div>
      </div>
    </form>
  </div>
  <!-- <a title="Login" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a> -->
</div>

@endsection
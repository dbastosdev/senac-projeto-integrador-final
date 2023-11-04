@extends('layouts.guest')

@section('title', 'Página Inicial')

@section('content')
<div class="container">
<div class="row">
    <form class="col s12" id="reg-form">
          <div class="wrapper center">
            <h4>Configurações de conta</h4>
          </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" required>
          <label for="first_name">Nome</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" required>
          <label for="last_name">Sobrenome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" required>
          <label for="email">E-mail</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" minlength="6" required>
          <label for="password">Senha</label>
        </div>
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
          <button class="btn btn-large btn-register waves-effect waves-light blue darken" type="submit" name="action">Atualizar
            <i class="material-icons right">update</i>
          </button>
        </div>
      </div>
    </form>
  </div>
  <!-- <a title="Login" class="ngl btn-floating btn-large waves-effect waves-light red"><i class="material-icons">input</i></a> -->
</div>

@endsection
@extends('layouts.guest')

@section('title', 'Página Inicial')

@section('content')
<main>
  <div class="container">
    <div class="row">
      <div class="col s8 offset-s2">

        <div class="card card-login">
        <div class="card-login-splash">
        <div class="wrapper center">
        <h2>Login</h2>
        <a class="btn blue darken" href="{{ route('register') }}">Registre-se</a>
        </div>
        </div>
        <div class="card-content">
        <span class="card-title">Log In</span>
        <form action="{{ route('auth.authenticate') }}" method="POST">
          <!-- token obrigatório para formulários -->
          @csrf
          <div class="input-field">
          <input id="email" name="email"type="text" class="validate">
          <label for="email">e-mail</label>
          </div>
          <div class="input-field">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">senha</label>
          </div>

          <!-- <a href="#!">Forgot Password?</a> -->

          <br><br>
          <div>
          <input class="btn right blue darken" type="submit" value="Entrar">
          <a href="{{ route('home') }}" class="btn-flat">voltar</a>
          </div>

        </form>
        </div>
        </div>

      </div>
    </div>
  </div>
</main>
@endsection
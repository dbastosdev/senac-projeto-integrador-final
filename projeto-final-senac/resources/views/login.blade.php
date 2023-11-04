@extends('layouts.guest')

@section('title', 'Página Inicial')

@section('content')
<main><div class="container">
  <div class="row">
    <div class="col s8 offset-s2">

      <div class="card card-login">
        <div class="card-login-splash">
          <div class="wrapper center">
            <h2>Acesse sua conta</h2>
            <a class="btn" href="#!">Registre-se</a>
          </div>
        </div>
        <div class="card-content">
          <span class="card-title">Log In</span>
          <form>
            <div class="input-field">
              <input id="username" type="text" class="validate">
              <label for="username">e-mail</label>
            </div>
            <div class="input-field">
              <input id="password" type="password" class="validate">
              <label for="password">senha</label>
            </div>

            <!-- <a href="#!">Forgot Password?</a> -->

            <br><br>
            <div>
              <input class="btn right" type="submit" value="Log In">
              <a href="{{ route('home') }}" class="btn-flat">Back</a>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>

</div>

    </main>
@endsection
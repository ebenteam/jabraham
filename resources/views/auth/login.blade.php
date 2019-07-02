@extends('layouts.login')

@section('content')

<div class="login-box">
  <div class="login-logo">
  <img src="{{asset('inicioweb/images/logob.png')}}">
    <h3 style="color:white" href="{{ url('/') }}"><b>INICIAR SESIÓN</b></h3>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tu correo y password</p>


<form  method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}

      <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
        @if ($errors->has('email'))
          <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
             <span class="help-block">
             <strong>{{ $errors->first('password') }}</strong>
             </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <a class="btn btn-link" href="{{ route('password.request') }}">
         Reenviar Password?
        </a>
        <!-- /.col -->
      </div>
    </form>
    <a href="{{ route('register') }}" class="text-center">Registro Nuevo</a>
@endsection

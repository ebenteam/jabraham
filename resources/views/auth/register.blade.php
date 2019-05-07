@extends('layouts.login')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>REGISTRO NUEVO</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tus Datos</p>

<form class="form-horizontal" method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
      
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
        <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
        <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" placeholder="Password"  name="password" required>
        @if ($errors->has('password'))
        <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registro</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="{{ url('/') }}" class="text-center">Volver</a>
@endsection


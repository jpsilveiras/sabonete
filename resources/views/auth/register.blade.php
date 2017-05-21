@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel panel-primary titulo">
                <div class="panel-heading">Registrar Usuário</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

<!-- NOME -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    <span class="input-group-addon">
                                        <button class="fa fa-user" style="background:transparent;border:none"></button>
                                    </span>
                                </div>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- EMAIL -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    <span class="input-group-addon">
                                        <button class="fa fa-envelope-o" style="background:transparent;border:none"></button>
                                    </span>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- SENHA -->

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>
                                    <span class="input-group-addon">
                                        <button class="fa fa-key" style="background:transparent;border:none"></button>
                                    </span>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<!-- CONFIRMA SENHA -->

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme a Senha</label>
                            <div class="col-md-7">
                                <div class="input-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password') }}" required autofocus>
                                    <span class="input-group-addon">
                                        <button class="fa fa-key" style="background:transparent;border:none"></button>
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-4">
                                <button type="submit" class="btn btn-primary col-md-4">
                                    Registrar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="panel-footer">
                    Casa do Sabonete
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

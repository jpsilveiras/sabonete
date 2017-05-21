@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel panel-primary titulo">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-7">

                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" name="password" required>
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

                        <div class="form-group">

                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>Lembre-me
                                    </label>
                                </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-4">
                                <button type="submit" class="btn btn-primary col-md-3">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-link" href=" {{ url('/password/reset')}} ">
                        Esqueceu a sua Senha?
                    </a>
                </div>
            </div>    
        </div>
    </div>
</div>
@endsection

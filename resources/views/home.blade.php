@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel panel-primary titulo">
                <div class="panel-heading">Bem-vindo {{ Auth::user()->name }}</div>
                <div class="panel-body">
                <div class="panel-body">
                    <img src="{{ asset("images/bom-trabalho.jpg") }}" width="65%"; height:auto; alt="Logo ZigWeb">
                </div>
                </div>
                <div class="panel-footer">
                        Bom Trabalho!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

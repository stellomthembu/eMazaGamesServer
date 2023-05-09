@extends('voyager::master')

@section('content')

    <div style="padding: 30px">
        <h1>Token Criado</h1>

        <div style="font-size: 16pt; color: red; font-weight:bold">
            <span>Atencao: conserve este token num lugar seguro pois nao podera recuperar uma vez fechada a janela!</span>

        </div>

        <div style="margin: 20px 10px 10px;">
            <p>
                {{$token}}
            </p>
        </div>

    </div>

@endsection

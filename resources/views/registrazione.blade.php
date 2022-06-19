@extends('layout')

@section('elementi_head')
    <script>
            const BASE_URL="{{url('/')}}";
    </script>
    <script src='{{ asset('js/registrazione.js') }}' defer></script>
    <link rel='stylesheet' href='{{ asset('css/registrazione.css') }}'>
@endsection

@section('nome_pagina')
    <h1>Registrazione</h1>
@endsection

@section('contenuto')
    <main id="contenitore_registrazione">
        <form method="POST" name="form_reg" action="/registrazione_server">
            @csrf
            <p>
                <label>Nome utente<input type="text" name="nomeUtente"></label>
            </p>
            <p>
                <label>Email<input type="email" name="email"></label>
            </p>
            <p>
                <label>Cellulare <input type="number" name="cellulare"></label>
            </p>
            <p>
                <label>Password <input type="password" name="password"></label>
            </p>
            <p>
                <label>Conferma password <input type="password" name="c_password"></label>
            </p>
            <input type="submit" id="invio">
        </form>
    </main>
    <div id="alert" class="nascoto"></div>
@endsection
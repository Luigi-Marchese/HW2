@extends('layout')

@section('elementi_head')
    <script>
            const BASE_URL="{{url('/')}}";
    </script>
    <script src='{{ asset('js/login.js') }}' defer></script>
    <link rel='stylesheet' href='{{ asset('css/login.css') }}'>
@endsection

@section('nome_pagina')
    <h1>Accedi</h1>
@endsection

@section('contenuto')
<div id="contenitore_login" >
    <form method="post" action="/login_server">
        @csrf
        <h3>Accedi per visionare il catalogo</h>
        <p>
        <label>Nome utente<input type="text" name="nomeUtente"></label>
        </p>
        <p>
        <label>Password <input type="password" name="password"></label>
        </p>
        <input type="submit">
    </form>
    </div>
        <a id="link_reg" href="{{route('registrazione')}}">Non sei ancora iscritto? Registrati</a>   
    </div> 
@endsection
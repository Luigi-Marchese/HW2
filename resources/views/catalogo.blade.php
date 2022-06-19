@extends('layout')

@section('elementi_head')
    <script>
            const BASE_URL="{{url('/')}}";
    </script>
    <script src='{{ asset('js/catalogo.js') }}' defer></script>
    <link rel='stylesheet' href='{{ asset('css/catalogo.css') }}'>
@endsection

@section('nome_pagina')
    <h1>Benvenuto {{ session('utente') }}</h1>
    <h3>nella sezione catalogo</h3>
@endsection

@section('contenuto')
    <h1>Cerca il tuo mezzo</h1>
    <div id="ricerca">
        <form method="POST" name="form_cerca">
            @csrf
            <p>
                <label><input type="text" name="barra_ricerca"  id="barra_ricerca"></label>
                <label><input type="submit" id="cerca" value="cerca"></label>
            </p>
        </form>
        <p><label><input type="button" id="mostra" value="mostra tutto"></label></p>
    </div>
    <section id="benelli" class="griglia"></section>
    <section id="kawasaki" class="griglia"></section>
    <section id="bmw" class="griglia"></section>   
@endsection
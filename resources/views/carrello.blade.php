@extends('layout')

@section('elementi_head')
    <script>
            const BASE_URL="{{url('/')}}";
    </script>
    <script src='{{ asset('js/carrello.js') }}' defer></script>
    <link rel='stylesheet' href='{{ asset('css/carrello.css') }}'>
@endsection

@section('nome_pagina')
    <h1>Carrello</h1>
@endsection

@section('contenuto')
<section id="contenitore" class="griglia"></section>
@endsection 
<!doctype html>
<html>
    <head>
        <title>HW2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100&display=swap" rel="stylesheet">        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='{{ asset('css/layout.css') }}'>
        @yield('elementi_head')
    </head>

    <body>
        <header>
            @yield('nome_pagina')
            <nav>
                <div id="Navigazione">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('carrello')}}" id="carrello">Carrello</a>
                    <a href="{{route('catalogo')}}">Catalogo</a>
                    <a href="{{route('logout')}}">Esci</a>   
                </div>
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>
        </header>
        @yield('contenuto')
    
    <footer>
        <div id="info">
            <a href="www">Chi siamo</a>
            <a href="www">Contatti</a>
            <a href="www">Lavora con noi</a>
            </div>
            <address>Luigi Marchese 1000026805</address>
    </footer>
</body>
</html>
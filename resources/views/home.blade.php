@extends('layout')

@section('elementi_head')
    <script>
            const BASE_URL="{{url('/')}}";
    </script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin="" defer="true"></script>
    <script src='{{ asset('js/HW1.js') }}' defer></script>
    <link rel='stylesheet' href='{{ asset('css/HW1.css') }}'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
@endsection        

@section('nome_pagina')
    <h1>Concessionario moto</h1>
@endsection

@section('contenuto')
<section id="contenitore_logo">
            <div id="elencoBrand"></div>
        </section>
        <section id="contenitore_suggerimenti">   
            <div id="AcquistiSuggeriti"></div>
        </section>
        <h3>Vieni a trovarci:</h3>
        <div id="map"></div>
@endsection
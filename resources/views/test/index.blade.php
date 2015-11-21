@extends('template')

@section('title') Olá, {{ $nome }} @endsection

@section('content')
<h1>Olá template!</h1>
    <p>Seja bem vindo, {{ $nome }}!</p>
    <p>Seja bem vindo, {!! $nome !!}!</p>
@endsection
@extends('template')
@section('title') Listagem de Notas @endsection

@section('content')

    <h2>Minhas notas</h2>
    <ul>
    @foreach($notas as $nota)
        <li>{{ $nota }}</li>
    @endforeach
    </ul>



@endsection
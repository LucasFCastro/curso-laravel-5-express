@extends('template')
@include('menubar')

<header class="intro-header">
    <div class="container">
        <div class="row">

            </div>
        </div>
    </div>
</header>

<div style="height: 20px"></div>

@section('content')
    <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading">Lista de Posts</div>

        <!-- Table -->
        <table class="table">

            <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>

            @foreach($posts as $post)
                <tr scope="row">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->autor }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-xs">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>

        {!! $posts->render() !!}

    </div>
@endsection


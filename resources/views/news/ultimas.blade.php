@extends('template')
@section('title') Últimos artigos @endsection

@section('content')

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <div class="post-preview">
                <a href="#">
                    <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
            </div>
            <hr>

            @foreach($artigos as $artigo)
            <div class="post-preview">
                <a href="#">
                    <h2 class="post-title">
                        {{ $artigo }}.
                    </h2>
                    <h3 class="post-subtitle">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class="post-meta">Criado por <a href="#">Lucas Castro</a> 20 de novembro de 2015</p>
            </div>
            <hr>
            @endforeach
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Outros artigos &rarr;</a>
                </li>
            </ul>
        </div>
    </div>

@endsection
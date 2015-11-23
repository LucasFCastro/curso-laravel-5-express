@extends('template')


@section('content')
    <div style="height: 20px"></div>
    <div class="panel panel-default" >
        <!-- Default panel contents -->
        <div class="panel-heading">Cadastro de Artigos</div>

        <div class="panel-body">

            {!! Form::open(['route'=>'admin.store']) !!}
            
                <!--- Title Field --->
                <div class="form-group">
                    {!! Form::label('title', 'Título:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            
                <!--- Conteudo Field --->
                <div class="form-group">
                    {!! Form::label('content', 'Conteudo:') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>
            
                <!--- salvar Field --->
                <div class="form-group">
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                </div>    
            
            {!! Form::close() !!}

        </div>

    </div>
@endsection


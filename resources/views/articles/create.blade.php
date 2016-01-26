@extends('layouts.app')

@section('content')
    <div claa="panel panel-default">
        <div class="panel-heading">
            <h2>Ajouter un Nouvel Article</h2>
            <a class="pull-right glyphicon glyphicon-chevron-left" href="{{url('/articles')}}" style="font-size: 15px; margin-top: -50px;">
                Retour aux Articles
            </a>
        </div>
        <div class="panel-body">
            {!! Form::open(['url'=>'articles']) !!}

            @include('articles.form', ['submitButton' => 'Publier'])

            {!! Form::close() !!}

            @include('errors.list')
        </div>
    </div>



@stop
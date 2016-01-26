@extends('layouts.app')

@section('content')
    <div claa="panel panel-default">
        <div class="panel-heading">
            <h2>Modifier: {!! $article->title !!}</h2>
            <a href="{{url("articles/$article->id")}}" class="pull-right glyphicon glyphicon-chevron-left" style="font-size: 15px;">
                Retour à l'article
            </a>
        </div>
        <div class="panel-body">
            {!! Form::model($article,['method' => 'PATCH','action' => ['ArticlesController@update',$article->id]]) !!}

            @include('articles.form', ['submitButton' => 'Modifier'])

            {!! Form::close() !!}

            @include('errors.list')
        </div>
    </div>

@stop
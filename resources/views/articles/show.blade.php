@extends('layouts.app')


@section('content')
    <div claa="panel panel-default">
        <div class="panel-heading">
            <h2>{{ $article->title }}</h2>
            <a class="pull-right glyphicon glyphicon-pencil" href="{{url("/articles/$article->id/edit")}}" style="font-size: 30px;">
            </a>
        </div>
        <div class="panel-body">
            <article>
                <h3>
                    {{ $article->body }}
                </h3>
                <p>
                    {{ $article->published_at->diffForHumans() }}
                </p>
            </article>
        </div>
    </div>

    <a href="{{url('articles')}}" class="pull-right">
        <h4>
            <span class="glyphicon glyphicon-chevron-left" style="font-size: 20px;"></span>
            Menu Principal
        </h4>
    </a>

@stop
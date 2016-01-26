@extends('layouts.app')



@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Articles</h2>
            <a class="pull-right glyphicon glyphicon-plus" href="{{url('/articles/create')}}" style="font-size: 30px; margin-top: -50px;">
            </a>
        </div>

        <div class="panel-body">
            <article>
                @foreach($articles as $article)
                    <li><h3><a href="{{ url('/articles',$article->id) }}">{{ $article->title }}</a></h3></li>
                @endforeach
            </article>
        </div>
    </div>
@stop
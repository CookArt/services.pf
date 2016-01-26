@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Page d'accueil</div>

        <div class="panel-body">
            Bienvenue {{ Auth::user()->name }}
        </div>
    </div>
@endsection

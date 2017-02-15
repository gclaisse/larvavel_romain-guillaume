@extends('layouts.app')

@section('content')
    <h1>Article n°{{$article->id}}</h1>

    <ul>
        <li>Auteur :    {{$article->user->name }}</li>
            <br>
            <li> Titre de l'article :   {{ $article->title}},
                <br>
            <li>{{ $article->content}}</li>
            <br>

    </ul>

    <a href="{{ route('article.index') }}" class="btn btn-info">Back to all tasks</a>
    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Edit Task</a>


    <form method="POST" action="{{ route('article.destroy', $article->id) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input value="Supprimer" type="submit" class="btn btn-primary">
    </form>
    Fin de la discussion



@endsection

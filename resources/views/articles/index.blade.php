@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1>Liste des articles</h1>
                        <ul>
                            @forelse($articles as $article)
                                <br>
                                <h2>{{ $article->title}}</h2>
                                <strong>Créé par {{$article->user->name }}</strong>
                                <hr>
                                <p>{{ $article->content}}</p>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('article.show', $article->id) }}" class="btn btn-info">Voir</a>
                                    </div>
                                </div>
                            @empty
                                <h2>Aucun article</h2>
                            @endforelse
                            {{$articles->links()}}
                        </ul>
                        <a href="{{ route('article.create', $article->id) }}" class="btn btn-primary">Créer un article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

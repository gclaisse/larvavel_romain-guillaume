@extends('layouts.master')

@section('content')
    <h1>Liste des articles</h1>




    <ul>

        @forelse($articles as $article)
            <br>
            <li>{{ $article->title}},
                Utilisateur : {{$article->user->name }}</li>
            <li>{{ $article->content}}</li>
            <li>{{ $article->user_id}}</li>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-info">View Task</a>




                </div>
            </div>
        @empty
            <h2>Aucun article</h2>
        @endforelse
        {{$articles->links()}}
    </ul>
    <a href="{{ route('article.create', $article->id) }}" class="btn btn-info">Create Task</a>


@endsection

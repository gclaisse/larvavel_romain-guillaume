@extends('layouts.app')

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

                    <a href="{{ route('article.create', $article->id) }}" class="btn btn-info">Create Task</a>

                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Edit Task</a>

                    <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input value="Supprimer" type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        @empty
            <h2>Aucun article</h2>
        @endforelse
        {{$articles->links()}}
    </ul>



@endsection

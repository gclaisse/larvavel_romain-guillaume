@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        @if(Auth::check())
                    <h1>Liste des articles</h1>
                    <ul>

                        @forelse($articles as $article)
                            <br>
                            <li>{{ $article->title}},
                                Utilisateur : {{$article->user->name }}</li>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ url('/admin/show', $article->id) }}" class="btn btn-info">Voir</a>

                                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Modifier</a>

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

                        @else
                            <h1>Connectez-vous pour accèder au panneau d'administration</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        @if(Auth::check())
                        <h1>Article n°{{$article->id}}</h1>

                        <ul>
                            <li>Auteur :    {{$article->user->name }}</li>
                            <br>
                            <li> Titre de l'article :   {{ $article->title}}</li>
                            <br>
                            <li>{{ $article->content}}</li>
                            <br>

                        </ul>

                        <a href="{{ url('/admin/articles') }}" class="btn btn-info">Back to all tasks</a>
                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Edit Task</a>


                        <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input value="Supprimer" type="submit" class="btn btn-primary">
                        </form>
                        <h2>Commentaires :</h2>
                        <ul>
                            @forelse($article->coms as $com)
                                <strong>{{$com->user->name}}</strong>
                                <li>{{$com->commentaire}}</li>
                                <br>
                                <form method="POST" action="{{ route('article.destroyCom', $com->id) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input value="Supprimer" type="submit" class="btn btn-primary">
                                </form>
                            @empty
                                aucun commentaire
                            @endforelse

                        </ul>
                        <h3>Commenter :</h3>
                        <form method="POST" action="{{route('article.comment', $article->id)}}">
                            {{csrf_field()}}
                            <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
                            <br>
                            <input type="submit" value="Envoyer">
                        </form>
                        @else
                            <h1>Connectez-vous pour accèder au panneau d'administration</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body col-md-offset-1">
                        @if(Auth::check())
                            <h1>{{ $article->title}}</h1>

                            <ul>
                                <strong>Créé par {{$article->user->name }}</strong>
                                <br>
                                <hr>
                                <p>{{ $article->content}}</p>
                                <hr>

                            </ul>

                        <a href="{{ url('/admin/articles') }}" class="btn btn-warning">Retour</a>
                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Editer</a>


                        <form method="POST" action="{{ route('article.destroy', $article->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input value="Supprimer" type="submit" class="btn btn-danger">
                        </form>
                        <h2>Commentaires :</h2>
                        <ul>
                            @forelse($article->coms as $com)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4><strong>{{$com->user->name}}</strong></h4>
                                        <p>{{$com->commentaire}}</p>
                                        <br>
                                        <form method="POST" action="{{ route('article.destroyCom', $com->id) }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input value="Supprimer" type="submit" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            @empty
                                aucun commentaire
                            @endforelse

                        </ul>
                        <h3>Commenter :</h3>
                        <form method="POST" action="{{route('article.comment', $article->id)}}">
                            {{csrf_field()}}
                            <textarea name="commentaire" id="" class="form-control" rows="3"></textarea>
                            <br>
                            <input type="submit" value="Commenter">
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

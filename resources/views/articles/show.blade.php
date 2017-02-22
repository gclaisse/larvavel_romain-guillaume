@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body col-md-offset-1">
                        <div class="addthis_inline_share_toolbox"></div>
                        <h1>{{ $article->title}}</h1>

                        <ul>
                            <strong>Créé par {{$article->user->name }}</strong>
                            <br>
                            <hr>
                            <p>{{ $article->content}}</p>
                            <hr>

                        </ul>

                        <a href="{{ route('article.index') }}" class="btn btn-warning">Retour</a>

                        <h2>Commentaires :</h2>
                        <ul>
                            @forelse($article->coms as $com)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4><strong>{{$com->user->name}}</strong></h4>
                                        <p>{{$com->commentaire}}</p>
                                        <br>
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
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

@extends('layouts.app')

@section('content')

     <div class="addthis_inline_share_toolbox"></div>
    <h1>Article n°{{$article->id}}</h1>

    <ul>
        <li>Auteur :    {{$article->user->name }}</li>
        <br>
        <li> Titre de l'article :   {{ $article->title}}</li>
        <br>
        <li>{{ $article->content}}</li>
        <br>

    </ul>

    <a href="{{ route('article.index') }}" class="btn btn-info">Back to all tasks</a>

    <h2>Commentaires :</h2>
    <ul>
        @forelse($article->coms as $com)
            <strong>{{$com->user->name}}</strong>
            <li>{{$com->commentaire}}</li>
            <br>
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



@endsection

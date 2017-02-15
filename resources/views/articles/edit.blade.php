@extends('layouts.app')

@section('content')

    <h1>Formulaire pour modifier un article</h1>



    <form method="POST" action="{{route('article.update', $article->id)}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        <input required type="text" value="{{$article->title}}" name="title">

        <br>
        <textarea name="content" id="" cols="30" rows="10" >{{$article->content}}</textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>
@endsection

@extends('layouts.app')

@section('content')

    <h1>Formulaire pour créer un article</h1>

    @if (count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('article.store')}}">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Titre">
    <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Envoyer">
    </form>
@endsection

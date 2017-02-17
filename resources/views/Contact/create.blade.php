@extends('layouts.app')

@section('content')

    <h1>Formulaire pour nous contacter</h1>

    @if (count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('contact.store')}}">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Sujet ">
        <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Votre message ici"></textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>
@endsection

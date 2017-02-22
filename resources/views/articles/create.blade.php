@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body col-md-offset-1">
                        <h1>Création d'article</h1>

                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{route('article.store')}}">
                        {{csrf_field()}}
                        <input type="text" name="title" placeholder="Titre" class="form-control">
                        <br>
                            <textarea name="content" id="" class="form-control" rows="10"></textarea>
                        <br>
                        <input type="submit" value="Créer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

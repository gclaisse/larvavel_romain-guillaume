@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">

                            <h2>Bonjour, {{Auth::user()->name}}</h2>

                            <br>


                             <h2>Vos Articles :</h2>

                            <ul>
                            @forelse(Auth::user()->articles as $article)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h1>{{ $article->title}}</h1>
                                            <p>{{ $article->content}}</p>
                                            <br>
                                            <p>
                                                <a href="{{ route('article.show', $article->id) }}" class="btn btn-info">Voir</a>
                                                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Editer</a>
                                            </p>
                                        </div>
                                    </div>

                            @empty
                                <h2>Aucun article</h2>
                            @endforelse

                            </ul>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
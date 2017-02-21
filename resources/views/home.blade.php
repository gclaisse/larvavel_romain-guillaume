@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                            <h2>Bonjour, {{Auth::user()->name}}</h2>
                            <h2>votre adresse mail :  {{Auth::user()->email}}</h2>
                            <br>


                             <h2>vos Posts</h2>

                            <ul>
                            @forelse(Auth::user()->articles as $article)

                                    <h1>{{ $article->title}}</h1>
                                    <li>{{ $article->content}}</li>
                                    <br>
                                    <p>
                                        <a href="{{ route('article.show', $article->id) }}" class="btn btn-info">View Task</a>
                                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary">Edit Task</a>
                                    </p>


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
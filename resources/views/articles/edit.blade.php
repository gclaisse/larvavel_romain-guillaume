@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body col-md-offset-1">
                        <h1>Modification d'article</h1>



                        <form method="POST" action="{{route('article.update', $article->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="put">
                            <input required type="text" value="{{$article->title}}" name="title" class="form-control">
                            <br>
                            <br>
                            <textarea name="content" id="" class="form-control" rows="10" >{{$article->content}}</textarea>
                            <br>
                            <input type="submit" value="Sauvegarder">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="well well-lg">Ajouter une Image</h1>
                        <div class="container">
                            @if(isset($success))
                                <div class="alert alert-success"> {{$success}} </div>
                            @endif
                            {!! Form::open(['action'=>'ImageController@store', 'files'=>true]) !!}

                            <div class="form-group">
                                {!! Form::label('title', 'Titre:') !!}
                                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('description', 'Description:') !!}
                                {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>5] ) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('image', 'Choisissez une image') !!}
                                {!! Form::file('image') !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Save', array( 'class'=>'btn btn-success form-control' )) !!}
                            </div>

                            {!! Form::close() !!}
                            <div class="alert-warning">
                                @foreach( $errors->all() as $error )
                                    <br> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
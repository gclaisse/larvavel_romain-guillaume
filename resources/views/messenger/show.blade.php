@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h1>{{ $thread->subject }}</h1>
                            <br>
                            @each('messenger.partials.messages', $thread->messages, 'message')

                            @include('messenger.partials.form-message')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body col-md-offset-1">
                        <h1>Envoyer un nouveau message</h1>
                        <form action="{{ route('messages.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <!-- Subject Form Input -->
                                <div class="form-group">
                                    <label class="control-label">Sujet</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Sujet"
                                           value="{{ old('subject') }}">
                                </div>

                                <!-- Message Form Input -->
                                <div class="form-group">
                                    <label class="control-label">Message</label>
                                    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                                </div>

                                @if($users->count() > 0)
                                    <h4><strong>Choisissez un ou plusieurs destinataires</strong></h4>
                                    <div class="checkbox">
                                        @foreach($users as $user)
                                            <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
                                                                                    value="{{ $user->id }}">{!!$user->name!!}</label>
                                        @endforeach
                                    </div>
                                @endif

                                <!-- Submit Form Input -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

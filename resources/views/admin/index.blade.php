@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        @if(Auth::check())
                            <h2>Bonjour, Admin</h2>
                        <br>
                            <h4>Que voulez-vous modifier?</h4>
                            <a href="{{ url('/admin/articles') }}" class="btn btn-primary">Liste des articles</a>
                            <a href="{{ url('/admin/userlist') }}" class="btn btn-info">Liste des utilisateurs</a>
                        @else
                            <h2>Bonjour invité</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
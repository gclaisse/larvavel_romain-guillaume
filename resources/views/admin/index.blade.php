@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if(Auth::check())
                            <h2>Bonjour, Admin</h2>
                            <a href="{{ url('/admin/articles') }}" class="btn btn-primary">Liste des articles</a>
                            <a href="{{ url('/admin/userlist') }}" class="btn btn-info">Liste des utilisateurs</a>
                            <a href="{{ url('/article') }}" class="btn btn-primary">Liste des images</a>
                        @else
                            <h2>Bonjour invité</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
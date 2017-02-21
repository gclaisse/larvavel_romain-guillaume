@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if(Auth::check())
                        <h1>Liste des utilisateurs</h1>
                        @forelse($users as $user)
                            <li>{{$user->name}}</li>
                            <form method="POST" action="{{ route('admin.destroyUser', $user->id) }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <input value="Supprimer" type="submit" class="btn btn-primary">
                            </form>
                            <br>
                        @empty
                            <h2>Aucun utilisateur</h2>
                        @endforelse
                        {{$users->links()}}
                        @else
                            <h1>Connectez-vous pour accèder au panneau d'administration</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
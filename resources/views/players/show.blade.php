@extends('layout.master')

@section('title', 'Player')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h2 class="display-4 font-italic">Player: <br>{{ $player->first_name }} {{ $player->last_name }}</h2>
            </div>
        </div>
        <div>
            <p>Email: {{ $player->email }}</p>
            <p>
                <a href={{ route('teams-show', ['id' => $player->team->id ]) }}>
                    Team: {{ $player->team->name }}
                </a>
            </p>
        </div>
    </main><!-- /.container -->
    <div>
@endsection
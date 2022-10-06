@extends('layout.master')

@section('title', 'Team')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h2 class="display-4 font-italic">Team: <br>{{ $team->name }}</h2>
            </div>
        </div>
        <div>
            <p>Email: {{ $team->email }}</p>
            <p>Address: {{ $team->address }}</p>
            <p>City: {{ $team->city }}</p>
            <p>{{ $team->name }} players:</p>
            <ul>
                @foreach ($team->players as $player)
                    <p>
                        <a href="{{ route('players-show', ['id' => $player->id]) }}">
                            {{ $player->first_name }} {{ $player->last_name }}
                        </a>
                    </p>
                @endforeach
            </ul>
        </div>
    </main><!-- /.container -->
    <div>
@endsection

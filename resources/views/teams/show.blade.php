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
        <h4>Comments:</h4>
        
        <ul>
            @foreach ($team->comments as $comment)
                <li>
                    <p>{{ $comment->content }} by {{ $comment->user->name }}</p>
                </li>
            @endforeach
        </ul>
    </div>
    <form method="POST" action="/teams/{{ $team->id }}/comments">
        @csrf

        <div class="mb-3">
            <label class="form-label" >Leave a comment</label>
            <textarea class="form-control" name="content" rows="2" ></textarea>
        </div>

        @error('body')
            @include('partials.error')
        @enderror

        <button type="submit" class="btn brn-primary">Submit</button>
    </form>
@endsection

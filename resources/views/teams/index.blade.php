@extends('layout.master')

@section('title', 'Teams')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">List of teams</h1>
            </div>
        </div>          
        <ul>
            @foreach ($teams as $team)
                <h2>
                    <a href="{{ route('teams-show', ['id' => $team->id ]) }}">
                        <li>{{ $team->name }}</li>
                    </a>
                </h2>
            @endforeach
        </ul>
    </main><!-- /.container -->
@endsection
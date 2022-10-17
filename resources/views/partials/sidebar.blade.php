<div class="container">
    <div class="row py-3">
        <div class="col" id="main">
            <h3 class="bg-warning text-danger p-2">Sort news by team:</h3>

    <ul>
        @foreach ($teamsWithNews as $team)
        <li>
            <a class="p-2 text-danger bg-warning"href="{{ route('teams-index', ['team' => $team]) }}">{{ $team->name }}</a>
        </li>
        @endforeach
    </ul>
        </div>
    </div>
</div>
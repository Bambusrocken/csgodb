@section('title', $team->name)
@section('subtitle', $team->tag)

@section('content')
    <div><strong>Country:</strong> {{ Countries::getOne($team->country, 'en', 'icu') }}</div>

    @if(count($team->teamnames))
        <div>
            <strong>Previous names:</strong>
            @foreach($team->teamnames as $teamname)
                {{ $teamname->name }}
            @endforeach
        </div>
    @endif

    @if(count($team->players))
        <h2>Current players</h2>
        @include('player._table', ['players' => $team->players, 'hideTeam' => true])
    @endif

    @if(count($team->playerteamrecords))
        <h2>Previous players</h2>
        @include('playerteamrecord._table', ['records' => $team->playerteamrecords, 'hideTeam' => true])
    @endif
@stop
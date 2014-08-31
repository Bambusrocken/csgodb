@section('title', $team->name)
@section('subtitle', $team->tag)

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => [link_to_route('team.index', 'Teams'), $team->name]])
@stop

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#info" role="tab" data-toggle="tab">Info</a></li>
        @if(count($team->players))
            <li><a href="#players" role="tab" data-toggle="tab">Current players</a></li>
        @endif
        @if(count($team->playerteamrecords))
            <li><a href="#prev_players" role="tab" data-toggle="tab">Previous players</a></li>
        @endif
        @if(count($team->teamtournamentrecords))
            <li><a href="#tournaments" role="tab" data-toggle="tab">Tournaments</a></li>
        @endif
        @if(count($matches))
            <li><a href="#matches" role="tab" data-toggle="tab">Matches</a></li>
        @endif
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="info">
            <p></p>
            <div><strong>Country:</strong> {{ Countries::getOne($team->country, 'en', 'icu') }}</div>
            @if(count($team->teamnames))
                <div>
                    <strong>Previous names:</strong>
                    @foreach($team->teamnames as $teamname)
                        {{ $teamname->name }}
                    @endforeach
                </div>
            @endif
        </div>

        <div class="tab-pane" id="players">
            @if(count($team->players))
                <p></p>
                @include('player._table', ['players' => $team->players, 'hideTeam' => true])
            @endif
        </div>

        <div class="tab-pane" id="prev_players">
            @if(count($team->playerteamrecords))
                <p></p>
                @include('playerteamrecord._table', ['records' => $team->playerteamrecords, 'hideTeam' => true])
            @endif
        </div>

        <div class="tab-pane" id="tournaments">
            <p></p>
            <p><strong>Total money won:</strong> {{ $totalPriceMoney }}</p>
            @include('teamtournament._table', ['teamtournamentrecords' => $team->teamtournamentrecords, 'hideTeam' => true])
        </div>

        <div class="tab-pane" id="matches">
            @include('match._table', ['matches' => $matches, 'teamId' => $team->id])
        </div>
    </div>
@stop
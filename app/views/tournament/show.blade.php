@section('title', $tournament->name)
@section('subtitle', $tournament->location)

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => [link_to_route('tournament.index', 'Tournaments'), $tournament->name]])
@stop

@section('content')
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#result" role="tab" data-toggle="tab">Result</a></li>
        <li><a href="#teams" \role="tab" data-toggle="tab">Teams</a></li>
        <li><a href="#players" role="tab" data-toggle="tab">Players</a></li>
        <li><a href="#matches" role="tab" data-toggle="tab">Matches</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="result">
            @include('teamtournament._table', ['teamtournamentrecords' => $tournament->teamtournamentrecords, 'hideTournament' => true])
        </div>
        <div class="tab-pane" id="teams">
            @include('team._table', ['teams' => $tournament->teams()])
        </div>
        <div class="tab-pane" id="players">
            @include('player._table', ['players' => $tournament->players()])
        </div>
        <div class="tab-pane" id="matches">
            <p></p>
            <p><strong># matches:</strong> {{ count($tournament->matches) }}</p>
            @include('match._table', ['matches' => $tournament->matches, 'hideTournament' => true])
        </div>
    </div>
@stop
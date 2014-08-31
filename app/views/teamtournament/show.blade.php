@section('title', $tournament->name)
@section('subtitle', $team->name)

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => [link_to_route('tournament.index', 'Tournaments'), link_to_route('tournament.show', $tournament->name, $tournament->slug), $team->name]])
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Info</div>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Place:</strong> {{ $teamtournament->place }}</li>
                    <li class="list-group-item"><strong>Price money:</strong> {{ $teamtournament->price }}</li>
                </ul>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Stats</div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Matches:</strong>
                        <span class="label label-success">{{ $matchStats['won'] }} won</span>
                        <span class="label label-danger">{{ $matchStats['lost'] }} lost</span>
                        @if($gameStats['drawn'])
                            <span class="label label-default">{{ $matchStats['drawn'] }} drawn</span>
                        @endif
                    </li>
                    <li class="list-group-item"><strong>Maps:</strong>
                        <span class="label label-success">{{ $gameStats['won'] }} won</span>
                        <span class="label label-danger">{{ $gameStats['lost'] }} lost</span>
                        @if($gameStats['drawn'])
                            <span class="label label-default">{{ $gameStats['drawn'] }} drawn</span>
                        @endif
                    </li>
                    @if(count($mapStats))
                        <li class="list-group-item">
                            <strong>Most played map:</strong> {{ $mapStats[0]['map']->name }}
                            @if(isset($mapStats[0]['won']))
                                <span class="label label-success">{{ $mapStats[0]['won'] }} won</span>
                            @endif
                            @if(isset($mapStats[0]['lost']))
                                <span class="label label-danger">{{ $mapStats[0]['lost'] }} lost</span>
                            @endif
                            @if(isset($mapStats[0]['drawn']))
                                <span class="label label-default">{{ $mapStats[0]['drawn'] }} drawn</span>
                            @endif
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Map stats</div>
                @include('map._table_stats', compact('mapStats'))
            </div>
        </div>

        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Players</div>
                <div class="panel-body">
                    @include('player._table', ['players' => $teamtournament->players])
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Matches</div>
                <div class="panel-body">
                    @include('match._table', ['matches' => $matches, 'teamId' => $team->id, 'hideTournament' => true])
                </div>
            </div>
        </div>
    </div>
@stop
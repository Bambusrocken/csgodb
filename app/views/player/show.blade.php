@section('title', $player->name)
@section('subtitle', $player->fullName)

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => [link_to_route('player.index', 'Players'), $player->name]])
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Info</div>
        <ul class="list-group">
            @if($player->team)
                <li class="list-group-item"><strong>Current team:</strong> {{ link_to_route('team.show', $player->team->name, $player->team->slug) }}</li>
            @endif
            <li class="list-group-item"><strong>Country:</strong> {{ Countries::getOne($player->country, 'en', 'icu') }}</li>
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Previous teams</div>
        <div class="panel-body">
            @if(count($player->playerteamrecords))
                @include('playerteamrecord._table', ['records' => $player->playerteamrecords, 'hidePlayer' => true])
            @endif
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Tournaments</div>
        @include('teamtournament._table', ['teamtournamentrecords' => $player->teamtournamentrecords])
    </div>
@stop
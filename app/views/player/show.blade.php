@section('title', $player->name)
@section('subtitle', $player->firstname . ' ' . $player->lastname)

@section('content-top')
    <ol class="breadcrumb">
      <li>{{ link_to_route('home', 'Home') }}</li>
      <li>{{ link_to_route('player.index', 'Players') }}</li>
      <li class="active">{{ $player->name }}</li>
    </ol>
@stop

@section('content')
    @if($player->team)
        <div><strong>Current team:</strong> {{ link_to_route('team.show', $player->team->name, $player->team->slug) }}</div>
    @endif
    <div><strong>Country:</strong> {{ Countries::getOne($player->country, 'en', 'icu') }}</div>

    @if(count($player->playerteamrecords))
        <h2>Previous teams</h2>
        @include('playerteamrecord._table', ['records' => $player->playerteamrecords, 'hidePlayer' => true])
    @endif

    @include('teamtournament._table', ['teamtournamentrecords' => $player->teamtournamentrecords])
@stop
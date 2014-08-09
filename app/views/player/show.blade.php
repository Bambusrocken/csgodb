@section('title', $player->name)
@section('subtitle', $player->firstname . ' ' . $player->lastname)

@section('content')
    <div><strong>Current team:</strong> {{ link_to_route('team.show', $player->team->name, $player->team->id) }}</div>
    <div><strong>Country:</strong> {{ Countries::getOne($player->country, 'en', 'icu') }}</div>

    @if(count($player->playerteamrecords))
        <h2>Previous teams</h2>
        @include('playerteamrecord._table', ['records' => $player->playerteamrecords, 'hidePlayer' => true])
    @endif
@stop
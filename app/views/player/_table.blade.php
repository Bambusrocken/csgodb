<table class="table table-hover">
    <thead>
        <tr>
            <th>Screen name</th>
            @if(empty($hideTeam))
                <th>Team</th>
            @endif
            <th>Name</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        @foreach($players as $player)
            <tr>
                <td>{{ link_to_route('player.show', $player->name, $player->slug) }}</td>
                @if(empty($hideTeam))
                    <td>{{ link_to_route('team.show', $player->team->name, $player->team->slug) }}</td>
                @endif
                <td>{{{ $player->firstname }}} {{{ $player->lastname }}}</td>
                <td>{{ Countries::getOne($player->country, 'en', 'icu') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@if(method_exists($players, 'links'))
    {{ $players->links() }}
@endif
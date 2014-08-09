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
                <td>{{ link_to_route('player.show', $player->name, $player->id) }}</td>
                @if(empty($hideTeam))
                    <td>{{ $player->team->name }}</td>
                @endif
                <td>{{{ $player->firstname }}} {{{ $player->lastname }}}</td>
                <td>{{ Countries::getOne($player->country, 'en', 'icu') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
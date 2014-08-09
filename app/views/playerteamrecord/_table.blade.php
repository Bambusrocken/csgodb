<table class="table table-hover">
    <thead>
        <tr>
            @if(empty($hidePlayer))
                <th>Player</th>
            @endif
            @if(empty($hideTeam))
                <th>Team</th>
            @endif
            <th>Start date</th>
            <th>End date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
            <tr>
                @if(empty($hidePlayer))
                    <td>{{ link_to_route('player.show', $record->player->name, $record->player->id) }}</td>
                @endif
                @if(empty($hideTeam))
                    <td>{{ link_to_route('team.show', $record->team->name, $record->team->id) }}</td>
                @endif
                <td>{{ $record->start_date }}</td>
                <td>{{ $record->end_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
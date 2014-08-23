<table class="table table-hover">
    <thead>
        <tr>
            @if(empty($hideTournament))
                <th>Tournament</th>
            @endif
            @if(empty($hideTeam))
                <th>Team</th>
            @endif
            <th>Place</th>
            <th>Price money</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teamtournamentrecords as $record)
            <tr>
                @if(empty($hideTournament))
                    <td>{{ link_to_route('tournament.team.show', $record->tournament->name, [$record->tournament->slug, $record->team->slug]) }}</td>
                @endif
                @if(empty($hideTeam))
                    <td>{{ link_to_route('tournament.team.show', $record->team->name, [$record->tournament->slug, $record->team->slug]) }}</td>
                @endif
                <td>{{ $record->place }}</td>
                <td>{{ $record->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@if(method_exists($teamtournamentrecords, 'links'))
    {{ $teamtournamentrecords->links() }}
@endif
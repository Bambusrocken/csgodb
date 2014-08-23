<table class="table table-hover">
    <thead>
        <tr>
            <th>Match</th>
            <th>Score</th>
            @if(empty($hideTournament))
                <th>Tournament</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach($matches as $match)
            <tr>
                <td>{{ link_to_route('match.show', $match->name, $match->slug) }}</td>
                <td>
                    {{ $match->home_team_score }} - {{ $match->away_team_score }}
                </td>
                @if(empty($hideTournament))
                    <td>{{ link_to_route('tournament.show', $match->tournament->name, $match->tournament->slug) }}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>

@if(method_exists($matches, 'links'))
    {{ $matches->links() }}
@endif
@if(count($matches))
    <table class="table table-hover">
        <thead>
            <tr>
                @if(isset($teamId))
                    <th>Result</th>
                @endif
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
                    @if(isset($teamId))
                        <td>{{ $match->result($teamId) }}</td>
                    @endif
                    <td>{{ link_to_route('match.show', $match->name(isset($teamId) ? $teamId : null), $match->slug) }}</td>
                    <td>{{ $match->score(isset($teamId) ? $teamId : null) }}</td>
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
@else
    No match records.
@endif
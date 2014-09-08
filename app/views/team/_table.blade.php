<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Last Lineup</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ link_to_route('team.show', $team->name, $team->id) }}</td>
                <td>{{ $team->lineups->first()->players->implode('name', ', ') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@if(method_exists($teams, 'links'))
    {{ $teams->links() }}
@endif

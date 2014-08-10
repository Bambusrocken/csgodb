<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Tag</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ link_to_route('team.show', $team->name, $team->slug) }}</td>
                <td>{{{ $team->tag }}}</td>
                <td>{{ Countries::getOne($team->country, 'en', 'icu') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@if(method_exists($teams, 'links'))
    {{ $teams->links() }}
@endif

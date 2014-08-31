<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Map</th>
            <th>Score</th>
        </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
            <tr>
                <td>{{ $game->number }}</td>
                <td>{{{ $game->map->name }}}</td>
                <td>{{ $game->score }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Pricepool</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tournaments as $tournament)
            <tr>
                <td>{{ link_to_route('tournament.show', $tournament->name, $tournament->slug) }}</td>
                <td>{{ $tournament->date }}</td>
                <td>{{ $tournament->pricepool }}</td>
                <td>{{ $tournament->location }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@if(method_exists($tournaments, 'links'))
    {{ $tournaments->links() }}
@endif
@if(count($mapStats))
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Map</th>
                <th>Won</th>
                <th>Lost</th>
                <th>Drawn</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mapStats as $map)
                <tr>
                    <td><strong>{{ $map['map']->name }}</strong></td>
                    <td>{{ $map['won'] or '-' }}</td>
                    <td>{{ $map['lost'] or '-' }}</td>
                    <td>{{ $map['drawn'] or '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="panel-body">
        No map records.
    </div>
@endif
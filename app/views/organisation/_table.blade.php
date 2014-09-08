<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Country</th>
        </tr>
    </thead>
    <tbody>
        @foreach($organisations as $organisation)
            <tr>
                <td>{{ link_to_route('organisation.show', $organisation->name, $organisation->id) }}</td>
                <td>{{ Countries::getOne($organisation->country, 'en', 'icu') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@if(method_exists($organisations, 'links'))
    {{ $organisations->links() }}
@endif

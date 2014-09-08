@section('subtitle', $organisation->name)

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => [link_to_route('organisation.index', 'Organisations'), $organisation->name]])
@stop

@section('content')
    @foreach($organisation->teams as $i => $team)
        <div>Team #{{ $i + 1 }}: {{ link_to_route('team.show', $team->players()->implode('name', ', '), $team->id) }}</div>
    @endforeach
@stop
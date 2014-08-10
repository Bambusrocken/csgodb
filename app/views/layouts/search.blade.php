@section('title', 'Search')
@section('subtitle', $q)

@section('content-top')
    <ol class="breadcrumb">
        <li>{{ link_to_route('home', 'Home') }}</li>
        <li class="active">Search</li>
    </ol>
@stop

@section('content')
    @if(count($results))
        @if(isset($results['teams']) && count($results['teams']))
            <h3>Teams <span class="badge">{{ count($results['teams']) }}</span></h3>
            @include('team._table', ['teams' => $results['teams']])
        @endif

        @if(isset($results['players']) && count($results['players']))
            <h3>Players <span class="badge">{{ count($results['players']) }}</span></h3>
            @include('player._table', ['players' => $results['players']])
        @endif
    @else
        No results
    @endif

@stop
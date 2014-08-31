@section('subtitle', 'Matches')

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => ['Matches']])
@stop

@section('content')
    @include('match._table')
@stop
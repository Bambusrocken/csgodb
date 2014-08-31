@section('subtitle', 'Tournaments')

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => ['Tournaments']])
@stop

@section('content')
    @include('tournament._table')
@stop
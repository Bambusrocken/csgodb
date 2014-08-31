@section('subtitle', 'Teams')

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => ['Teams']])
@stop

@section('content')
    @include('team._table')
@stop
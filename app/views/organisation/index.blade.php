@section('subtitle', 'Organisations')

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => ['Organisations']])
@stop

@section('content')
    @include('organisation._table', compact('organisations'))
@stop
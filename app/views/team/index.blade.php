@section('subtitle', 'Teams')

@section('content-top')
    <ol class="breadcrumb">
      <li>{{ link_to_route('home', 'Home') }}</li>
      <li class="active">Teams</li>
    </ol>
@stop

@section('content')
    @include('team._table')
@stop
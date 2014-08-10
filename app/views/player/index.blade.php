@section('subtitle', 'Players')

@section('content-top')
    <ol class="breadcrumb">
      <li>{{ link_to_route('home', 'Home') }}</li>
      <li class="active">Players</li>
    </ol>
@stop

@section('content')
    <div class="btn-group">
        <button type="button" class="btn btn-default">{{ link_to('players', 'all') }}</button>
        @foreach($chars as $char)
              <button type="button" class="btn btn-default">{{ link_to('players/' . $char, $char) }}</button>
        @endforeach
    </div>

    @include('player._table')
@stop
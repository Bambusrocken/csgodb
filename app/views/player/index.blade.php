@section('subtitle', 'Players')

@section('content-top')
    <ol class="breadcrumb">
      <li>{{ link_to_route('home', 'Home') }}</li>
      <li class="active">Players</li>
    </ol>
@stop

@section('content')
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group">
            <?php $classes = (!empty(Request::segment(2))) ? 'btn btn-default' : 'btn btn-primary'; ?>
            {{ link_to_route('player.index', 'All', null, ['class' => $classes]) }}
        </div>
        <div class="btn-group">
            @foreach($chars as $char)
                <?php $classes = (Request::segment(2) != $char) ? 'btn btn-default' : 'btn btn-primary'; ?>
                {{ link_to_route('player.index', Str::upper($char), $char, ['class' => $classes]) }}
            @endforeach
        </div>
    </div>

    @include('player._table')
@stop
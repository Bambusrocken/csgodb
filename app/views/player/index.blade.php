@section('subtitle', 'Players')

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => ['Players']])
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
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
        </div>
        <div class="panel-body">
            @include('player._table')
        </div>
    </div>
@stop
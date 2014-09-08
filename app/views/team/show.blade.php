@section('subtitle', $team->name)

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => [link_to_route('team.index', 'Teams'), $team->name]])
@stop

@section('content')
    @foreach($team->lineups as $lineup)
        <div class="panel panel-default">
            <div class="panel-heading">
                @if($lineup->end_date->year != -1)
                    {{ $lineup->start_date->format('d/m/Y') . ' -> ' . $lineup->end_date->format('d/m/Y') }}
                @else
                    Current lineup ({{ $lineup->start_date->format('d/m/Y') }})
                @endif
            </div>
            @include('player._table', ['players' => $lineup->players])
        </div>
    @endforeach
@stop
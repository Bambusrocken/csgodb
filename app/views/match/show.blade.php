@section('title', $match->name)
@section('subtitle', $match->tournament->name)

@section('content-top')
    @include('layouts._breadcrumbs', ['breadcrumbs' => [link_to_route('match.index', 'Matches'), $match->name]])
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Info</div>
                <div class="panel-body">
                    <div><strong>Home team:</strong> {{ link_to_route('tournament.team.show', $match->hometeam->name, [$match->tournament->slug, $match->hometeam->slug]) }}</div>
                    <div><strong>Away team:</strong> {{ link_to_route('tournament.team.show', $match->awayteam->name, [$match->tournament->slug, $match->awayteam->slug]) }}</div>
                    <div><strong>Tournament:</strong> {{ link_to_route('tournament.show', $match->tournament->name, $match->tournament->slug) }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Games</div>
                @include('match.game._table', ['games' => $match->games])
            </div>
        </div>
    </div>
@stop
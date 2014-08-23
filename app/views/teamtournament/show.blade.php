@section('title', $tournament->name)
@section('subtitle', $team->name)

@section('content')
    <div><strong>Place:</strong> {{ $teamtournament->place }}</div>
    <div><strong>Price money:</strong> {{ $teamtournament->price }}</div>

    @include('player._table', ['players' => $teamtournament->players])

    @include('match._table', ['matches' => $matches])
@stop
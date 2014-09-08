<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{ link_to_route('home', 'CSGO DataBase', null, ['class' => 'navbar-brand']) }}
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="{{ URL::route('organisation.index') }}"><span class="glyphicon glyphicon-fire"></span> Organisations</a></li>
        <li><a href="{{ URL::route('team.index') }}"><span class="glyphicon glyphicon-fire"></span> Teams</a></li>
        <li><a href="{{ URL::route('player.index') }}"><span class="glyphicon glyphicon-user"></span> Players</a></li>
        <!--<li><a href="{{ URL::route('tournament.index') }}"><span class="glyphicon glyphicon-th"></span> Tournaments</a></li>
        <li><a href="{{ URL::route('match.index') }}"><span class="glyphicon glyphicon-retweet"></span> Matches</a></li>-->
      </ul>
      {{ Form::open(['route' => 'search.store', 'class' => 'navbar-form navbar-left']) }}
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Search" value="{{{ $q or '' }}}">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
      {{ Form::close() }}
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
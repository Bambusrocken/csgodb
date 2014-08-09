<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <title>CSGO DB</title>
    </head>
    <body>

        @include('layouts._nav')

        <div class="container">
            <div class="row">
                <div class="page-header">
                  <h1>@yield('title', 'CSGO') <small>@yield('subtitle')</small></h1>
                </div>

                @yield('content')
            </div>
        </div>

    </body>
</html>
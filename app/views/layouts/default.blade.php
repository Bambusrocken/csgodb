<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <title>CSGO DB</title>
    </head>
    <body>

        @include('layouts._nav')

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="content-top">
                        @yield('content-top')
                    </div>

                    <div class="page-header">
                      <h1>@yield('title', 'CSGO') <small>@yield('subtitle')</small></h1>
                    </div>

                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.Laravel = {!!json_encode([
                'csrfToken' => csrf_token(),
            ]) !!
        };
    </script>

</head>

<body>
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
            <a class="navbar-brand" href="#"> Administrator</a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 col-md-2">
                @include("admin.shared.sidebar")
            </div>
            <div class="col-sm-10 col-md-10">
                <div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Title
                        </div>
                        <div class="panel-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        Footer
    </footer>
</body>

</html>
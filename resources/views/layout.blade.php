<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Kimt">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('library/b/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('library/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-multiselect.css') }} ">
</head>
<body>
<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white">Algorithme CI</h4>
            @yield('menu')
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
<div class="container-fluid">
    @yield('content')
</div>
<script src="{{ asset('library/jquery.min.js') }} "></script>
<script src="{{ asset('library/bootstrap3-typeahead.min.js') }} "></script>
<script src="{{ asset('library/bootstrap/js/bootstrap.min.js') }} "></script>
<script src="{{ asset('library/bootstrap-multiselect.js') }} "></script>
<script src="{{ asset('js/script.js') }} "></script>
</body>
</html>
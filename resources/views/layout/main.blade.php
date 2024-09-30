<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/all.css") }}">
</head>
<body>
    
    @include('parsial.navbar')

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="{{ asset("assets/js/bootstrap.js") }}"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ACme</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header>
    @include('inc.navbar')
</header>
<main>
    <div class="container">
        @if(Request::is('/'))
        @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-8">
                @include('inc.message')
                @yield('content')
            </div>
            <div class="col-md-4">@include('inc.sidebar')</div>
        </div>
    </div>
</main>
<footer class="text-center">
    <p>Copyright 2017 &copy; Acme</p>
</footer>
</body>
</html>

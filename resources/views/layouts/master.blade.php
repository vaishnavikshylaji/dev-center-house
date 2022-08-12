<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @include('partials.css')
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
@include('partials.navbar')
<div class="container">
    @yield('content')
</div>
@include('partials.js')
@stack('js')
</body>
</html>

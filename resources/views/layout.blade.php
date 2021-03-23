<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


</head>
<body>
<div class="container">
    <!-- Content here -->
    <div class="alert alert-primary mt-5 mb-5" role="alert">
        A simple primary alert—check it out!
    </div>
    <div class="row">
        @yield('content')
    </div>

</div>

<script type="text/javascript" src="{{ mix('js/app.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <noscript>
        <link rel="stylesheet" href="{{asset('css/noscript.css')}}" />
    </noscript>
    <title>@yield('title')</title>
</head>

<body class="is-preload">
    <div class="wrapper">
        @yield('content')
    </div>

    {{-- Scripts --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.poptrox.min.js')}}"></script>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/util.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>

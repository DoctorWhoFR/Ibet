<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- PAR MAXIME BENAMARA -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/favicon.png">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('css/loaders.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body style="background: url({{asset('images/background.png')}}) no-repeat  fixed ">

    @yield('content')



    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/materialize.js') }}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/countdown.min.js')}}"></script>

    @yield('scripts')
</body>
</html>

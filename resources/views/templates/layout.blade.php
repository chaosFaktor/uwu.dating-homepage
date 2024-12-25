
@include("partials.app_bar")
<head>
    @stack('styles')
    <link href="{{ asset('css/vars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/article.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">

    <link href="{{ asset('css/38c3.css') }}" rel="stylesheet">


</head>

<body>
    @yield('app_bar')
    <div class="main-content">
        @yield('main-content')
    </div>
</body>
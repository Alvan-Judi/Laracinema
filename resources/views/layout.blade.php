<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>LaraCinema</title>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>
        <div class="container">
            <nav id="main-nav">
                <ul>
                    <li><a href="/">Welcome</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/concept">Concept</a></li>
                    <li><a href="{{route('movies')}}">Movies</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </nav>
            <div class="content">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                        @endif
                    @endforeach
                </div>

                @yield('content')

                <!-- SROUCE SCRIPT JS-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                <script src="{{asset('js/script.js')}}"></script>
            </div>


        </div>
    </body>
</html>
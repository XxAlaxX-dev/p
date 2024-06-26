<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <script src="{{ asset('js/app.js')}}" defer></script>

        <title>@yield('title')</title>
    </head>
    <body>
        <header>
        @include('messages')
        </header>
        
        <main>
            
            @yield('content')
        </main>

        <footer>
        </footer>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        @yield('header')

    </head>
    <body>
        <nav class ="main">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="tasks">Task Lists</a></li>
            </ul>
        </nav>
        <content>
            @yield('content')
        </content>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Comics</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h1>Template laravel</h1>
            <img src="{{ Vite::asset('resources/img/superpippo.webp') }}" alt="" srcset="">
        </div>

    </body>
</html>

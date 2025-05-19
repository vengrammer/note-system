<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @session('message')
            <div style="background-color: #26823b; color: #e7dfdf; padding: 12px 20px; border-left: 6px solid #28a745; border-radius: 4px; font-size: 17px; margin-bottom: 15px;">
                {{ session('message') }}
            </div>
        @endsession
        {{ $slot}}
    </body>
</html>

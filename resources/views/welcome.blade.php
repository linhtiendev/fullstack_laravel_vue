<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fullstack Blog</title>

    </head>
    <script src="{{ asset('js/app.js') }}" defer> </script>
    <body>
        <div id="app">
            <mainapp/>
        </div>
    </body>
</html>

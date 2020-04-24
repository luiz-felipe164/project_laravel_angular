<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <body>
        <app-root></app-root>

        <script src="{{ asset('js/runtime-es2015.js') }}" type="module"></script>
        <script src="{{ asset('js/runtime-es5.js') }}" nomodule defer></script>
        <script src="{{ asset('js/polyfills-es5.js') }}" nomodule defer></script>
        <script src="{{ asset('js/polyfills-es2015.js') }}" type="module"></script>
        <script src="{{ asset('js/styles-es2015.js') }}" type="module"></script>
        <script src="{{ asset('js/styles-es5.js') }}" nomodule defer></script>
        <script src="{{ asset('js/vendor-es2015.js') }}" type="module"></script>
        <script src="{{ asset('js/vendor-es5.js') }}" nomodule defer></script>
        <script src="{{ asset('js/main-es2015.js') }}" type="module"></script>
        <script src="{{ asset('js/main-es5.js') }}" nomodule defer></script>
    </body>

</html>

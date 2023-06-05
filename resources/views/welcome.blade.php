<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{mix('css/app.css')}}?time={{time()}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Laravel</title>
    <style>
        .active-menu{
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body class="antialiased">
<div id="app">
    <app></app>
</div>
<script src="{{mix('js/app.js')}}?time={{time()}}"></script>
</body>
</html>

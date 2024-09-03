<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX PAGE</title>

    @vite(['resources/css/app.css', 'resources/js/app-js'])

</head>
<body >
    <h1 class="font-bold text-center">INDEX PAGE!<h1>
        <br>
        <u1>
            <a href="{{route('index') }}"><li>Home</li></a>
            <a href="{{route('gallery') }}"><li>Gallery</li></a>
            <a href="{{route('services') }}"><li>Services</li></a>
            <a href="{{route('about') }}"><li>About</li></a>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title> {{ $title }} </title>

</head>
<body>

    @include('partials.navbar')

    {{ $slot }}  

</body>
</html>

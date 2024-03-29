<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eLibrary | Online Digital Library</title>

{{--    <script src="https://cdn.tailwindcss.com"></script> --}}
{{--  npx tailwindcss -i ./resources/css/app.css -o ./public/css/app.css --watch --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')

</head>
<body class="text-gray-600 ">
    <div>

<x-website.navbar/>

<x-website.header/>

@yield('content')

<x-website.footer/>

    </div>
</body>
</html>

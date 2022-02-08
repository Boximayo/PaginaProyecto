<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Miel</title>
</head>

<body>
    @include('Partials.header')
    @include('Partials.navbar')
    @include('Partials.breadcrumb')
    @yield('content')
    @include('Partials.footer')


    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>

</body>

</html>

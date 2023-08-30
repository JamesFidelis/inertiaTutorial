<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Inertia Tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />
    @routes
    @vite(['resources/css/app.css','resources/js/app.js'])
    @inertiaHead
</head>
<body class="bg-white dark:bg-gray-900 text-black dark:text-white ">
@inertia
{{--<script src="../path/to/flowbite/dist/flowbite.min.js"></script>--}}
{{--<script src="./node_modules/preline/dist/preline.js"></script>--}}
</body>
</html>

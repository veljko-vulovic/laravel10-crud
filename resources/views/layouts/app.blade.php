<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="antialiased">
    <div class="relative min-h-screen bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500">

        <div class="bg-gray-800 py-3 px-6">
            <div class="flex items items-center justify-between text-white max-w-7xl">
                <a class="underline" href="{{route('user.index')}}">Home</a>
                <a class="border bg-green-500 rounded-md px-3 py-2" href="{{route('user.create')}}"> Add User</a>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Himpunan Kosong')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        @include('components.navbar')

        <main class="flex-grow container mx-auto px-4 py-8">
            @yield('content')
        </main>

        @include('components.footer')
    </div>
</body>
</html>

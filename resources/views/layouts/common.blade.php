<!DOCTYPE html>
<html lang="ja">
    <head>
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<style>


</style>
<body class="bg-teal-100">
        <div class='header'>
            @yield('header')
        </div>
        <div class="flex flex-row gap-x-4">
            <div class=" w-1/6 bg-amber-200 h-screen">
                @yield('sidebar')
            </div>
            <div class="w-5/6 ">
                @yield('content')
            </div>
        </div>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
    <head>
    </head>
<style>
.flex{
    display: flex;
}
.sidebar{
    width: 200px;
}
.content{
    width: calc(100%-200px);
}
</style>
<body>
    <div>
        @yield('header')
    </div>
    <div class="flex">
        <div class="sidebar">
            @yield('sidebar')
        </div>
        <main class"content">
            @yield('content')
        </main>
    </div>
</body>
</html>
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
    background-color:#f0f8ff;
}
.content{
    width: calc(100%-200px);
}

</style>
<body>
    <div class='header'>
        @yield('header')
    </div>
    <div class="flex">
        <div class="sidebar">
            @yield('sidebar')
        </div>
        <div class"content">
            @yield('content')
        </div>
    </div>
</body>
</html>
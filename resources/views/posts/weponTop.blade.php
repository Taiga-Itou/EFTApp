<x-app-slot>
    <x-slot name="header">
        WeponTop
    </x-slot>
<h1>Wepon</h1>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <>

</x-app-slot>
<x-app-layout>
    <x-slot name="header">
        WeponTop
    </x-slot>
<h1>Wepon</h1>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <p1 class='wepon'>{{ $post->gun->wepon->name }}:{{ $post->gun->name }}</p1>
            <p2 class='tag'>{{ $post->tag->name }}</p2>
            <p3 class='image'>{{ $post->image}}</p3>
            <p4 class='good_num'>{{ $post->good_num }}</p4>
            <p5 class='user_id'> {{ $post->user->name}}</p5>
            <p6 class='update_at'>{{ $post->update_at }}</p6>
        </div>
        @endforeach
    </div>

</x-app-layout>
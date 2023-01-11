<x-app-layout>
    <x-slot name="header">

    </x-slot>
<h1>{{ $posts->gun->wepon->name}}</h1>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='post'>
            <a href="/posts/{{ $post->id }}" class='title'>{{ $post->title }}</a>
            <p1 class='wepon'>{{ $post->gun->wepon->name }}::{{ $post->gun->name }}</p1>
            <p2 class='tag'>{{ $post->tag->name }}</p2>
            <p3 class='image'>{{ $post->image}}</p3>
            <p4 class='good_num'>{{ $post->good_num }}</p4>
            <p5 class='user_id'> {{ $post->user->name}}</p5>
            <p6 class='update_at'>{{ $post->update_at }}</p6>
        </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $posts->links() }}
    </div>

</x-app-layout>
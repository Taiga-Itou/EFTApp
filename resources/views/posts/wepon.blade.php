<x-app-layout>
    <x-slot>
    </x-slot>
    <h1 class="title">{{ $posts->title }}</h1>
    <img src="{{ asset('storage/images/'.$posts->image) }}" class="image">
    <div class="wepon">{{ $posts->gun->wepon->name }}::{{ $posts->gun->name }}</div>
    <div class="tag"> {{ $posts->tag->name}} </div>
    <div class="body">{{ $posts->body }}</div>
    <div class="good_num">{{ $posts->good_num }}</div>
    <div class="update_at">{{ $posts->update_at }}</div>
    <div class="footer">
        <a href="/posts">戻る</a>
    </div>
</x-app-layout>
    
        
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
    <div class="edit">
        <a href="/posts/{{ $posts->id }}/edit">Edit</a>
    </div>
    <div class="delete">
        <form action="/posts/{{ $posts->id }}" id="form_{{$posts->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $posts->id }})">削除</button>
        </form>
    </div>
    <script>
        function deletePost(id)
        {
            'use strict'
            
            if(confirm('削除すると復元できません。\n本当に削除しますか？'))
            {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</x-app-layout>
    
        
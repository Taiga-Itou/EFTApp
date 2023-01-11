<x-app-layout>
    <x-slot>
        mypage
    </x-slot>
        <div class="myposts">
            @foreach($myposts as $mypost)
            <div class="post">
                <a href="/posts/{{ $mypost->id }}" class='title'>{{ $mypost->title }}</a>
                <img src="{{ asset('storage/images/'.$mypost->image) }}" class="image">
                <div class="body">{{ $mypost->body }}</div>
                <div class="wepon">{{ $mypost->gun->wepon->name }}::{{ $mypost->gun->name }}</div>
                <div class="tag"> {{ $mypost->tag->name}} </div>
                <div class="body">{{ $mypost->body }}</div>
                <div class="good_num">{{ $mypost->good_num }}</div>
                <div class="update_at">{{ $mypost->update_at }}</div>
                <div class="edit">
                    <a href="/posts/{{ $mypost->id }}/edit">Edit</a>
                </div>
                <div class="delete">
                    <form action="/posts/{{ $mypost->id }}" id="form_{{$mypost->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $mypost->id }})">削除</button>
                    </form>
                </div>
            </div>
            @endforeach
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
@extends('layouts.common')
@include('layouts.header')
@include('layouts.sidebar')
@section('content')

<div class="border-l-2 border-black">
 <div class="text-lg">MY PAGE</div>
        <div class="myposts">
            @foreach($myposts as $mypost)
            <div class='mt-0.5 border-y-2 border-black'>
                <a href="/posts/{{ $mypost->id }}" class='underline'>{{ $mypost->title }}</a>
                <div class="border-y-2 border-black">
                    <div class="w-32 text-center text-xs border-b border-r border-black rounded-lg">詳細/Detail</div>
                    <div>{!!nl2br(htmlspecialchars( $mypost->body))!!}</div>
                </div>
                <div>
                    <p1 class='text-sm'>{{ $mypost->gun->wepon->name }}::{{ $mypost->gun->name }}</p1>
                    <p2 class='tag'>{{ $mypost->tag->name }}</p2>
                    <p3 class='good_num'>♡{{ $mypost->good_num }}</p3>
                    <p4 class='user_id'> {{ $mypost->user->name}}</p4>
                    <p5 class='update_at'>{{ $mypost->updated_at }}</p5>
                </div>
                <img src="{{ $mypost->image }}" class="w-4/5">
                <div class="edit">
                    <button class="border-2 border-black rounded-full bg-green-400 w-32" onclick="location.href='/posts/{{ $mypost->id }}/edit'">
                    編集/Edit
                    </button>
                </div>
                <div class="delete">
                    <form action="/posts/{{ $mypost->id }}" id="form_{{$mypost->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="border-2 border-black rounded-full bg-red-600 w-32" type="button" onclick="deletePost({{ $mypost->id }})">削除/Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
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
@endsection
@extends('layouts.common')
@include('layouts.header')
@include('layouts.sidebar')
@section('content')
<div class="border-l-2 border-black">
<div class="text-lg">投稿詳細/Post Detail</div>
    <p class="border-t-2 border-black">User/{{ $posts->user->name }}</p>
    <h1 class="text-lg">{{ $posts->title }}</h1>
    <img src="{{ $posts->image }}" class="w-11/12">
    <div class="text-sm">{{ $posts->gun->wepon->name }}::{{ $posts->gun->name }}</div>
    <div class="tag"> {{ $posts->tag->name}} </div>
    <div class="border-y-2 border-black">
        <div class="w-32 text-center text-xs border-b border-r border-black rounded-lg">詳細/Detail</div>
        <div>{!!nl2br(htmlspecialchars( $posts->body))!!}</div>
    </div>
    <div class="good_num">
        <form action="/good_num/{{$posts->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="post[title]" value="{{ $posts->title }}">
        <input type="hidden" name="post[body]" value="{{ $posts->body }}">
        <input type="hidden" name="post[gun_id]" value="{{ $posts->gun_id }}">
        <input type="hidden" name="post[image]" value="{{ $posts->image }}">
        <input type="hidden" name="post[tag_id]" value="{{ $posts->tag_id }}">
        <input class="text-pink-500" type="submit" value="♡"/>
        {{ $posts->good_num }}
        </form>
    </div>
    <div class="update_at">CreateTime/{{ $posts->updated_at }}</div>
    <div class="">
        @foreach($comments as $comment)
        <div class="border rounded-lg border-black mt-1 flex flex-col gap-x-1">
            <div class="flex flex-row">
                <div class="w-32 text-center text-xs border-b border-r border-black rounded-lg">User/{{ $comment->user->name }}</div>
                <div class="w-64 text-center text-xs border-b border-r border-black rounded-lg">CreateTime/{{ $comment->updated_at }}</div>
            </div>
            <div class="text-base leading-tight">{!!nl2br(htmlspecialchars( $comment->body ))!!}</div>
        </div>
        @endforeach
    </div>
        <form action="/comment" method="POST" >
            @csrf
            <input type="hidden" name="comment[post_id]" value="{{ $posts->id }}">
            <div class="body">
                <h2>コメント作成/CommentCreate</h2>
                <textarea name="comment[body]" placeholder="コメント" cols="80" rows="5"></textarea>
                <p class="errors">{{ $errors->first('comments.body') }}</p>
            </div>
            <input type="submit" value="作成"/>
        </form>
    <div class="footer">
        <a href="/posts">戻る</a>
    </div>
    </div>
@endsection
    
        
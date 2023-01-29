@extends('layouts.common')
@include('layouts.header')
@include('layouts.sidebar')
@section('content')
<h1>投稿詳細</h1>
    <p class="user_id">{{ $posts->user->name }}</p>
    <h1 class="title">{{ $posts->title }}</h1>
    <img src="{{ $posts->image }}" class="image">
    <div class="wepon">{{ $posts->gun->wepon->name }}::{{ $posts->gun->name }}</div>
    <div class="tag"> {{ $posts->tag->name}} </div>
    <div class="body">{{ $posts->body }}</div>
    <div class="good_num">{{ $posts->good_num }}</div>
    <div class="update_at">{{ $posts->updated_at }}</div>
    <div class="comments">
        @foreach($comments as $comment)
        <div class="user_id">{{ $comment->user->name }}</div>
        <div class="comment">{{ $comment->body }}</div>
        <div class="update_at">{{ $comment->updated_at }}</div>
        @endforeach
    </div>
        <form action="/comment" method="POST" >
            @csrf
            <input type="hidden" name="comment[post_id]" value="{{ $posts->id }}">
            <div class="body">
                <h2>コメント</h2>
                <textarea name="comment[body]" placeholder="コメント" ></textarea>
                <p class="errors">{{ $errors->first('comments.body') }}</p>
            </div>
            <input type="submit" value="作成"/>
        </form>
    <div class="footer">
        <a href="/posts">戻る</a>
    </div>
@endsection
    
        
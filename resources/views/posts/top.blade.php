@extends('layouts.common')
@include('layouts.sidebar')
@include('layouts.header')
@section('content')

    <h1>ランキング/Rank</h1>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='mt-0.5 border-y-2 border-black'>
            <div>
                {{ $loop->iteration }}
                <a href="/posts/{{ $post->id }}" class='title'>{{ $post->title }}</a>
            </div>
            <div>
                <p1 class='text-sm'>{{ $post->gun->wepon->name }}::{{ $post->gun->name }}</p1>
                <p2 class='tag'>{{ $post->tag->name }}</p2>
                <p3 class='good_num'>♡{{ $post->good_num }}</p3>
                <p4 class='user_id'> {{ $post->user->name}}</p4>
                <p5 class='update_at'>{{ $post->updated_at }}</p5>
            </div>
            <div>
                <img src="{{ $post->image }}" class="w-4/5">
            </div>
            
        </div>
        @endforeach
    </div>
@endsection
    
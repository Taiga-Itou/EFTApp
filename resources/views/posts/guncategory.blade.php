@extends('layouts.common')
@include('layouts.header')
@include('layouts.sidebar')
@section('content')
<div class="border-l-2 border-black">
    <h1 class="text-lg">{{ $gun_name }}</h1>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='mt-0.5 border-y-2 border-black'>
            <div>
                <a href="/posts/{{ $post->id }}" class='underline'>{{ $post->title }}</a>
            </div>
            <div>
                <p1 class='text-sm'>{{ $post->gun->wepon->name }}::{{ $post->gun->name }}</p1>
                <p2 class='tag'>{{ $post->tag->name }}</p2>
                <p4 class='good_num'>♡{{ $post->good_num }}</p4>
                <p5 class='user_id'> {{ $post->user->name}}</p5>
                <p6 class='update_at'>{{ $post->updated_at }}</p6>
            </div>
            <div>
                <img src="{{ $post->image }}" class="w-4/5">
            </div>
            
        </div>
        @endforeach
    </div>
    <div class='paginate'>
        
    </div>
</div>
@endsection
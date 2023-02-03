@extends('layouts.common')
@include('layouts.header')
@include('layouts.sidebar')
@section('content')
<div class="border-l-2 border-black">
<div class="text-lg">Wepon</div>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='mt-0.5 border-y-2 border-black'>
            
            <div>
                <a href="/posts/{{ $post->id }}" class='underline'>{{ $post->title }}</a>
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
    <div class='paginate'>
        
    </div>
</div>
@endsection
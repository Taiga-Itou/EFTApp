@extends('layouts.common')
@include('layouts.sidebar')
@include('layouts.header')
@section('content')
<style>
.image{
    width:500px;
}
.wepons{
    font-size:20px;
}
.post{
    border:solid 3px;
}
</style>
    <h1>ランキング</h1>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='post'>
            <div>
                {{ $loop->iteration }}
                <a href="/posts/{{ $post->id }}" class='title'>{{ $post->title }}</a>
            </div>
            <div>
                <p1 class='wepons'>{{ $post->gun->wepon->name }}::{{ $post->gun->name }}</p1>
                <p2 class='tag'>{{ $post->tag->name }}</p2>
                <p3 class='good_num'>♡{{ $post->good_num }}</p3>
                <p4 class='user_id'> {{ $post->user->name}}</p4>
                <p5 class='update_at'>{{ $post->updated_at }}</p5>
            </div>
            <div>
                <img src="{{ $post->image }}" class="image">
            </div>
            
        </div>
        @endforeach
    </div>
@endsection
    
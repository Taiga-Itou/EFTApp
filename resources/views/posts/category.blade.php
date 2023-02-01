@extends('layouts.common')
@include('layouts.header')
@include('layouts.sidebar')
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
    @foreach($wepons as $wepon)
    <h1 class="category">{{ $wepon->name }}</h1>
    @endforeach
    <div class='posts'>
        @foreach($posts as $post)
        <div class='post'>
            <div>
                <a href="/posts/{{ $post->id }}" class='title'>{{ $post->title }}</a>
            </div>
            <div>
                <p1 class='wepon'>{{ $post->gun->wepon->name }}::{{ $post->gun->name }}</p1>
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
    <div class='paginate'>
        
    </div>
@endsection
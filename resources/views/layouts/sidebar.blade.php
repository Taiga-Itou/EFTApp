@section('sidebar')
<style>
.wepons{
    font:30px;
}
.wepon{
    font-size:10px;
}

</style>
<div>
<h1>Wepons</h1>
<ul class='wepons' onclick="func()">
    <ul>
        @foreach($assault_carbines as $assault_carbine)
        @if($loop->first)
        <li class="wepon">
            <a href="/wepons/{{ $assault_carbine->wepon_id }}">{{ $assault_carbine->wepon->name}}</a>
            <ul>
            @endif
                <li class="wepon">{{$assault_carbine->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($assault_rifles as $assault_rifle)
            @if($loop->first)
            <li>
                <a class="wepon" href="/wepons/{{ $assault_rifle->wepon_id }}">{{ $assault_rifle->wepon->name}}</a>
            <ul>
            @endif
                <li class="wepon">{{$assault_rifle->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($bolt_action_rifles as $bolt_action_rifle)
            @if($loop->first)
            <li class="wepon">
                <a href="/wepons/{{ $bolt_action_rifle->wepon_id }}">{{ $bolt_action_rifle->wepon->name}}</a>
                <ul>
                @endif
                    <li class="wepon">{{$bolt_action_rifle->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($machineguns as $machinegun)
            @if($loop->first)
            <li>
                <a class="wepon" href="/wepons/{{ $machinegun->wepon_id }}">{{ $machinegun->wepon->name}}</a>
                <ul>
            @endif
                    <li class="wepon">{{$machinegun->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($marksman_rifles as $marksman_rifle)
            @if($loop->first)
            <li>
                <a class="wepon" href="/wepons/{{ $marksman_rifle->wepon_id }}">{{ $marksman_rifle->wepon->name}}</a>
                <ul>
            @endif
                    <li class="wepon">{{$marksman_rifle->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($pistols as $pistol)
            @if($loop->first)
            <li>
                <a class="wepon" href="/wepons/{{ $pistol->wepon_id }}">{{ $pistol->wepon->name}}</a>
                <ul>
            @endif
                    <li class="wepon">{{$pistol->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($shotguns as $shotgun)
            @if($loop->first)
            <li>
                <a class="wepon" href="/wepons/{{ $shotgun->wepon_id }}">{{ $shotgun->wepon->name}}</a>
                <ul>
            @endif
                    <li class="wepon">{{$shotgun->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($sub_machineguns as $sub_machinegun)
            @if($loop->first)
            <li>
                <a class="wepon" href="/wepons/{{ $sub_machinegun->wepon_id }}">{{ $sub_machinegun->wepon->name}}</a>
                <ul>
            @endif
                    <li class="wepon">{{$sub_machinegun->name}}</li>
            @endforeach
                </ul>
            </li>
        </ul>
        </ul>
</div>
@endsection
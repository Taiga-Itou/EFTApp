@section('sidebar')
<style>
.wepon{
    font-size:13px;
}
.create{
    font-size:13px;
}

</style>
<div class="wepon">
        <a href="/posts">Wepons</a>
        @foreach($assault_carbines as $assault_carbine)
        @if($loop->first)
        <details>
            <summary>
            <a href="/wepons/{{ $assault_carbine->wepon_id }}">{{ $assault_carbine->wepon->name}}</a>
            </summary>
            @endif
                <li>
                    <a href="/wepon/{{ $assault_carbine->id }}">{{$assault_carbine->name}}</a>
                </li>
            @endforeach
        </details>
            @foreach($assault_rifles as $assault_rifle)
            @if($loop->first)
        <details>
            <summary>
                <a  href="/wepons/{{ $assault_rifle->wepon_id }}">{{ $assault_rifle->wepon->name}}</a>
            </summary>
            @endif
                <li>
                    <a  href="/wepon/{{ $assault_rifle->id }}">{{$assault_rifle->name}}</a>
                </li>
            @endforeach
        </details>
            @foreach($bolt_action_rifles as $bolt_action_rifle)
            @if($loop->first)
        <details>
            <summary>
                <a href="/wepons/{{ $bolt_action_rifle->wepon_id }}">{{ $bolt_action_rifle->wepon->name}}</a>
            </summary>
            @endif
                <li>
                    <a href="/wepon/{{ $bolt_action_rifle->id }}">{{$bolt_action_rifle->name}}</a>
                </li>
            @endforeach
        </details>
            @foreach($machineguns as $machinegun)
            @if($loop->first)
        <details>
            <summary>
                <a href="/wepons/{{ $machinegun->wepon_id }}">{{ $machinegun->wepon->name}}</a>
            </summary>
            @endif
                <li>
                    <a href="/wepon/{{ $machinegun->id }}">{{$machinegun->name}}</a>
                </li>
            @endforeach
        </details>
            @foreach($marksman_rifles as $marksman_rifle)
            @if($loop->first)
        <details>
            <summary>
                <a href="/wepons/{{ $marksman_rifle->wepon_id }}">{{ $marksman_rifle->wepon->name}}</a>
            </summary>
            @endif
                <li>
                    <a href="/wepon/{{ $marksman_rifle->id }}">{{$marksman_rifle->name}}</a>
                </li>
            @endforeach
        </details>
            @foreach($pistols as $pistol)
            @if($loop->first)
        <details>
            <summary>
                <a href="/wepons/{{ $pistol->wepon_id }}">{{ $pistol->wepon->name}}</a>
            </summary>
            @endif
                <li>
                    <a href="/wepon/{{ $pistol->id }}">{{$pistol->name}}</a>
                </li>
            @endforeach
        </details>
            @foreach($shotguns as $shotgun)
            @if($loop->first)
        <details>
            <summary>
                <a href="/wepons/{{ $shotgun->wepon_id }}">{{ $shotgun->wepon->name}}</a>
            </summary>
            @endif
                <li>
                    <a href="/wepon/{{ $shotgun->id }}">{{$shotgun->name}}</a>
                </li>
            @endforeach
        </details>
            @foreach($sub_machineguns as $sub_machinegun)
            @if($loop->first)
        <details>
            <summary>
                <a href="/wepons/{{ $sub_machinegun->wepon_id }}">{{ $sub_machinegun->wepon->name}}</a>
            </summary>
            @endif
                <li>
                    <a href="/wepon/{{ $sub_machinegun->id }}">{{$sub_machinegun->name}}</a>
                </li>
            @endforeach
        </details>
        
</div>
<div class="create">
    <a href="/posts/create">投稿作成/Create</a>
</div>
<div>
    <a href="/mypage">Mypage</a>
</div>

@endsection
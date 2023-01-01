<x-app-layout>
    <x-slot name="header">
        top
    </x-slot>
    <style>
    ul{list-style-type: none;}

.wepons ul{
position: relative;
margin: 0;
margin-left: 15px;
padding: 0;
}

.wepons ul:before {
content: "";
display: block;
position: absolute;
top: 0;
bottom: 0;
left: 0;
border-left: 1px solid blue;
}

.wepons ul li {
position: relative;
margin: 0;
padding: 5px 17px;
}

.wepons ul li:before {
content: "";
display: block;
position: absolute;
top: 15px;
left: 0;
width: 15px;
border-top: 1px solid blue;
}

.wepons ul li:last-child:before {
top: 15px;
bottom: 0;
height: auto;
background-color: #fff;
}
</style>
    @csrf
    <h1>Wepons</h1>
    <ul class='wepons'>
        <ul>
            @foreach($assault_carbines as $assault_carbine)
            @if($loop->first)
            <li>{{ $assault_carbine->wepon->name}}
                <ul>
            @endif
                    <li>    {{$assault_carbine->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($assault_rifles as $assault_rifle)
            @if($loop->first)
            <li>{{ $assault_rifle->wepon->name}}
                <ul>
            @endif
                    <li>    {{$assault_rifle->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($bolt_action_rifles as $bolt_action_rifle)
            @if($loop->first)
            <li>{{ $bolt_action_rifle->wepon->name}}
                <ul>
                @endif
                    <li>    {{$bolt_action_rifle->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($machineguns as $machinegun)
            @if($loop->first)
            <li>{{ $machinegun->wepon->name}}
                <ul>
            @endif
                    <li>    {{$machinegun->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($marksman_rifles as $marksman_rifle)
            @if($loop->first)
            <li>{{ $marksman_rifle->wepon->name}}
                <ul>
            @endif
                    <li>    {{$marksman_rifle->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($pistols as $pistol)
            @if($loop->first)
            <li>{{ $pistol->wepon->name}}
                <ul>
            @endif
                    <li>    {{$pistol->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($shotguns as $shotgun)
            @if($loop->first)
            <li>{{ $shotgun->wepon->name}}
                <ul>
            @endif
                    <li>    {{$shotgun->name}}</li>
            @endforeach
                </ul>
            </li>
            @foreach($sub_machineguns as $sub_machinegun)
            @if($loop->first)
            <li>{{ $sub_machinegun->wepon->name}}
                <ul>
            @endif
                    <li>    {{$sub_machinegun->name}}</li>
            @endforeach
                </ul>
            </li>
        </ul>
</x-app-layout>
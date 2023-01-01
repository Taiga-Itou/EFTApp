<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wepon;
use App\Models\Assault_carbine;
use App\Models\Assault_rifle;
use App\Models\Bolt_action_rifle;
use App\Models\Machinegun;
use App\Models\Marksman_rifle;
use App\Models\Pistol;
use App\Models\Shotgun;
use App\Models\Sub_machinegun;

class PostController extends Controller
{
    public function top
    (
        Assault_carbine $assault_carbine, Assault_rifle $assault_rifle, 
        Bolt_action_rifle $bolt_action_rifle, Machinegun $machinegun,
        Marksman_rifle $marksman_rifle, Pistol $pistol,
        Shotgun $shotgun, Sub_machinegun $sub_machinegun
    )
    {
        return view('posts/top')->with(['assault_carbines'=> $assault_carbine-> get(),
                                        'assault_rifles'=> $assault_rifle-> get(),
                                        'bolt_action_rifles'=> $bolt_action_rifle-> get(),
                                        'machineguns'=> $machinegun-> get(),
                                        'marksman_rifles'=> $marksman_rifle-> get(),
                                        'pistols'=> $pistol-> get(),
                                        'shotguns'=> $shotgun-> get(),
                                        'sub_machineguns'=> $sub_machinegun-> get()
                                        ]);
    }
}

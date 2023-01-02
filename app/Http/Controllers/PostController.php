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
use App\Models\Gun;
use App\Models\posts;

class PostController extends Controller
{
    public function top
    (
        Gun $gun
    )
    {
        return view('posts/top')->with([
                                        'assault_carbines'=> $gun-> Where('wepon_id','1')->get() ,
                                        'assault_rifles'=> $gun-> Where('wepon_id','2')->get(),
                                        'bolt_action_rifles'=> $gun-> Where('wepon_id','3')->get(),
                                        'machineguns'=> $gun-> Where('wepon_id','4')->get(),
                                        'marksman_rifles'=> $gun-> Where('wepon_id','5')->get(),
                                        'pistols'=> $gun-> Where('wepon_id','6')->get(),
                                        'sub_machineguns'=> $gun-> Where('wepon_id','7')->get(),
                                        'shotguns'=> $gun-> Where('wepon_id','8')->get(),
                                        ]);
    }
    
    public function weponTop(Post $post)
    {
        return view('posts/weponTop')->with(['post'=> $post-> get()]);
    }
}

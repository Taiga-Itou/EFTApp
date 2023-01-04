<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wepon;
use App\Models\Gun;
use App\Models\Post;

class PostController extends Controller
{
    public function top(Gun $gun)
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
        return view('posts/weponTop')->with(['posts'=> $post=Post::with(['gun.wepon'])->simplePaginate(15)]);
    }
}

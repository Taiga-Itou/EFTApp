<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wepon;
use App\Models\Gun;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;

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
        return view('posts/weponTop')->with(['posts'=> $post ->simplePaginate(15)]);
    }
    
    public function wepon(Post $post)
    {
        return view('posts/wepon')->with(['posts'=> $post]);
    }
    
    public function create(Gun $gun,Tag $tag)
    {
        return view('posts/create')->with([
                                            'guns'=> $gun->get(),
                                            'tags'=> $tag->get()
                                            ]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input =$request['post'];
        $img = $request->file('image');
        $extension = $img->getClientOriginalExtension();
        $file_token = Str::random(32);
        $filename = $file_token . '.' . $extension;
        $input['image'] = $filename;
        $img ->storeAs('public/images',$filename);
        $input['user_id'] = Auth::user()->id;
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post,Gun $gun,Tag $tag)
    {
        return view('posts/edit')->with([
                                        'posts'=> $post,
                                        'guns'=> $gun->get(),
                                        'tags'=> $tag->get()
                                        ]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $img = $request->file('image');
        $img ->storeAs('public/images',$post->image);
        $post->fill($input_post)->save();
        
        return redirect('/posts/'. $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
    
    public function category(Post $post, Gun $gun, Wepon $wepon)
    {
        $wepon_id = $wepon->id;
        #dd($wepon_id);
        $category = $gun->where('wepon_id',$wepon_id)->get();
        #dd($category);
        $gun_id = $category->gun->id->get();
        dd($gun_id);
        return view('posts/category')->with(['posts'=> $post-> where('gun_id',$category)->get() ]);
    }
}
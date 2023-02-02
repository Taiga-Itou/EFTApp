<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Wepon;
use App\Models\Gun;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use Cloudinary;

class PostController extends Controller
{
    public function top(Gun $gun,Post $post)
    {
        return view('posts/top')->with([
                                        'posts'=>$post->orderBy('good_num','DESC')->take(10)->get(),
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
    
    public function weponTop(Post $post,Gun $gun)
    {
        return view('posts/weponTop')->with(['posts'=> $post ->get(),
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
    
    public function wepon(Post $post,Comment $comment,Gun $gun)
    {
        $post_id =$post->id;
        #dd($post_id);
        return view('posts/wepon')->with(['posts'=> $post,
                                            'comments'=>$comment->where('post_id',$post_id)->get(),
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
    
    public function create(Gun $gun,Tag $tag)
    {
        return view('posts/create')->with([
                                            'guns'=> $gun->get(),
                                            'tags'=> $tag->get(),
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
    
    public function store(PostRequest $request, Post $post)
    {
        $input =$request['post'];
        $img_url= Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input['image']= $img_url;
        $input['user_id'] = Auth::user()->id;
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post,Gun $gun,Tag $tag)
    {
        return view('posts/edit')->with([
                                        'posts'=> $post,
                                        'guns'=> $gun->get(),
                                        'tags'=> $tag->get(),
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
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        #dd($input_post);
        $image = $post->image;
        $img = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input_post['image']=$img;
        #dd($input_post);
        $post->fill($input_post)->save();
        #dd($post);
        return redirect('/posts/'. $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/mypage');
    }
    
    public function category(Post $post, Gun $gun, Wepon $wepon)
    {
        $wepon_id = $wepon->id;
        #dd($wepon_id);
        $categories = $gun->where('wepon_id',$wepon_id)->get();
        $wepon = [];
        foreach($categories as $category)
        {
        $wepon[] = $category->id;
        }
        $wepon2 = new Wepon();
        #dd($wepon);
        #dd($post-> whereIn('gun_id',$wepon)->get());
        #dd($wepon2->where('id',$wepon_id)->get());
        return view('posts/category')->with([
            'posts'=> $post-> whereIn('gun_id',$wepon)->get(),
            'wepons' => $wepon2->where('id',$wepon_id)->get(),
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
    
    public function commentstore(Comment $comment,Request $request)
    {
        $input = $request['comment'];
        $user = Auth::user()->id;
        $input['user_id']= $user;
        #dd($input);
        $comment->fill($input)->save();
        return redirect('/posts/'.$comment->post_id);
        
    }
    
    public function gun(Post $post,Gun $gun)
    {
        $gun_id = $gun->id;
        $gun_name=$gun->name;
        $gun_category = $post->where('gun_id',$gun_id)->get();
        return view('posts/guncategory')->with([
            'posts'=>$gun_category,
            'gun_name'=>$gun_name,
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
    
    public function good_num(Request $request,Post $post)
    {
        $input_post = $request['post'];
        #dd($input_post);
        $good_sum = $post->good_num+1;
        #dd($good_sum);
        $input_post['good_num'] =$good_sum;
        #dd($input_post);
        $post->fill($input_post)->save();
        #dd($post);
        return redirect('/posts/'.$post->id);
    }
    
    public function random(Post $post,Gun $gun,Comment $comment)
    {
        $posts = $post->count();
        $random_posts = $post->find(rand(1,$posts));
        $post_id = $random_posts->id;
        return view('/posts/wepon')->with(['posts'=>$random_posts,
                                            'comments'=>$comment->where('post_id',$post_id)->get(),
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
    
}
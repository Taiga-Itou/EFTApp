<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\Gun;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    
    public function mypage(Post $post,Gun $gun)
    {
        $user=Auth::user()->id;
        return view('profile/mypage')->with([ 
            'myposts'=>$post->where('user_id',$user)->get(),
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

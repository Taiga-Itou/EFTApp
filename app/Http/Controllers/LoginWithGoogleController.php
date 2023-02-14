<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class LoginWithGoogleController extends Controller
{
    public function getGoogleAuth(){
        return Socialite::driver("google")->redirect();
    }
    
    public function authGoogleCallback(){
    
            $user = Socialite::driver("google")->user();
            $finduser = User::where("google_id",$user->id)->first();
            
            if($finduser){
                Auth::login($finduser);
                return redirect('/top');
            } else {
                $newUser = User::create([
                    "name"  => $user->name,
                    "email" => $user->email,
                    "google_id" => $user->id,
                    "password" => encrypt("123456dummy"),
                    
                ]);
                
                Auth::login($newUser);
                return redirect('/top');
            }
        
    }
}

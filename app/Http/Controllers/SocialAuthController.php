<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\SocialAccountService;
use Socialite; // socialite namespace
use Illuminate\Http\Request;

class SocialAuthController extends Controller
{
 // redirect function
    public function redirect(){
      return Socialite::driver('facebook')->redirect();
    }
    // callback function
    public function callback(SocialAccountService $service){
      // when facebook call us a with token
      $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
      auth()->login($user);
      return redirect()->to('/home');
    }
}

<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;


class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();

    }
    public function callback(){
        // $now= DB::raw('CURRENT_TIMESTAMP()');
        // dd($now);
        $userFacebookInfo = Socialite::with('facebook')->stateless()->user();
        // dd($userFacebookInfo);
        $check_user=User::where('email',$userFacebookInfo->email)->first();
        if($check_user)
        {
            // if (Hash::check('plain-text', $hashedPassword)) {
            //     // The passwords match...
            // }
            Auth::login($check_user);
        }
        else{

            $user= new User
            ([

                'name'=>$userFacebookInfo->name,
                'email'=>$userFacebookInfo->email,
                'role'=>'user',
                'password'=>Hash::make($userFacebookInfo->id),
                'email_verified_at'=> now(),
            ]);
            $user->save();

        }

        return redirect('/home');




     }
}

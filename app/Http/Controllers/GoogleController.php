<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function GoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->getId())->first();
            if($finduser)
            {
                Auth::login($finduser);
                return redirect('/');

            }else{
                
                $UserBaru = User::create([
                    'name' =>$user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make('Noval200512')
                    
                ]);
                
                Auth::login($UserBaru);
                return redirect('/');
            }
        } catch (\Throwable $th) {
            return redirect('/login')->with('status','User Ini Tidak Memakai Email Google, Silahkan Login Memakai Email & Password');
        }
    }
}

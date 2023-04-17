<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class TwitterController extends Controller
{
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function handleTwitterCallback()
    {
        try {

            $user = Socialite::driver('twitter')->user();

            $finduser = User::where('twitter_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);
                return redirect()->intended('/');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'email' => $user->name.'@gmail.com',
                    'twitter_id' => $user->id,
                    'password' => Hash::make('Noval200512'),
                ]);

                Auth::login($newUser);

                return redirect()->intended('/');
            }
        } catch (Exception $e) {
            return redirect('/login')->with('status', $e->getMessage());
        }
    }
}

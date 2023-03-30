<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function gitCallback()
    {
        try {

            $user = Socialite::driver('github')->user();

            $searchUser = User::where('github_id', $user->id)->first();

            if ($searchUser) {

                Auth::login($searchUser);

                return redirect('/dashboard');
            } else {
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id' => $user->id,
                    'password' => Hash::make('Noval200512')
                ]);

                Auth::login($gitUser);

                return redirect('/');
            }
        } catch (Exception $e) {
            return redirect('/login')->with('status', 'Login Error Silahkan Coba Cara Lain');
        }
    }
}

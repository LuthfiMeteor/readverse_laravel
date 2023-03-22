<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(Request $request)
    {
        $user = Socialite::driver('facebook')->user();

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', Rule::unique('users')->where(function ($query) use ($user) {
                return $query->where('email', $user->getEmail());
            })],
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')->withErrors($validator);
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        Auth::login($user);

        return redirect()->intended('/');
    }
}

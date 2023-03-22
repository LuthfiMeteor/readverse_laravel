<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TwitterController extends Controller
{
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from Twitter.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleTwitterCallback()
    {
        $twitterUser = Socialite::driver('twitter')->user();

        // Check if the user already exists in the database
        $user = User::where('twitter_id', $twitterUser->getId())->first();

        if (!$user) {
            // Create a new user in the database if the user does not exist
            $user = User::create([
                'name' => $twitterUser->getName(),
                'email' => $twitterUser->getEmail(),
                'twitter_id' => $twitterUser->getId(),
            ]);
        }

        // Log in the user
        Auth::login($user, true);

        return redirect()->intended('/');
    }
}

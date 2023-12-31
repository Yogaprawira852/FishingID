<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GithubController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect(); // You can pass optional parameters here if needed
    }

    public function callback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();

            $user = User::updateOrCreate(
                ['github_id' => $githubUser->id],
                [
                    'name' => $githubUser->getName(),
                    'email' => $githubUser->getEmail(),
                    'password' => Hash::make(Str::random(24)), // Increase the length of the random password
                    'github_token' => $githubUser->token,
                    'github_refresh_token' => $githubUser->refreshToken,
                ]
            );

            auth()->login($user, true);

            return redirect()->to('/user/dashboard');
        } catch (\Exception $e) {
            // Handle exception (e.g., log or show an error message)
            return redirect()->route('login')->withErrors(['error' => 'GitHub authentication failed']);
        }
    }
}

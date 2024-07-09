<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $ProviderUser = Socialite::driver($provider)->user();

            if (User::where('email', $ProviderUser->getEmail())->exists()) {
                return redirect('/login')->withErrors(['email' => 'This email uses a different login method.']);
            }

            if (User::where('username', $ProviderUser->getNickname())->exists()) {
                return redirect('/login')->withErrors(['username' => 'This username uses a different login method.']);
            }

            $user = User::where([
                'provider' => $provider,
                'provider_id' => $ProviderUser->id,
                'email' => $ProviderUser->email,
            ])->first();

            if (!$user) {
                $userData = [
                    'provider_id' => $ProviderUser->id,
                    'provider' => $provider,
                    'email' => $ProviderUser->email,
                    'provider_token' => $ProviderUser->token,
                ];

                if ($ProviderUser->name) {
                    $userData['username'] = User::generateUserName($ProviderUser->name);
                } else {
                    $userData['username'] = User::generateUserName($ProviderUser->nickname);
                }

                $user = User::updateOrCreate([
                    'provider_id' => $ProviderUser->id,
                    'provider' => $provider,
                ], $userData);
            }

            Auth::login($user);
            return redirect('/dashboard');
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}

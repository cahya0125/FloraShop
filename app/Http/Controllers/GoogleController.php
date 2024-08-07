<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {
        try {
            Log::info('Masuk ke handleGoogleCallback');
            $user = Socialite::driver('google')->user();
            Log::info('User dari Google: ' . json_encode($user));

            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('/');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email],[
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'password' => Hash::make('password')
                ]);

                Auth::login($newUser);
                return redirect()->intended('/');
            }
        } catch (\Exception $e) {
            Log::error('Error during Google login: ' . $e->getMessage());
            return redirect('/login')->with('error', 'Something went wrong!');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    //
    protected string $providers = "github";

    public function loginRegister (): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view("auth.login-register");
    }

    public function redirect (Request $request) {
        $provider = $request->provider;

        if (in_array($provider, (array)$this->providers)) {
            return Socialite::driver($provider)->redirect();
        }
        abort(404);
    }

    public function callback (Request $request) {
        $provider = $request->provider;

        if (in_array($provider, (array)$this->providers)) {

            $data = Socialite::driver($request->provider)->user();
            $user = $data->user;
            dd($user);
        }
        abort(404);
    }
}

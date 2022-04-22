<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class SocialiteController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $githubUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => $githubUser->nickname,
            'email' => $githubUser->email,
            'avatar_url' => $githubUser->avatar,
        ]);

        Auth::login($user);

        if (Auth::user()->email = null || Auth::user()->email_public = null || Auth::user()->address = null || Auth::user()->phone = null || Auth::user()->iban = null){

        return redirect('/auth/register');
        }

    else{
            return redirect('/dashboard');

    }



    }

    public function signOut() {
        Auth::logout();
        return redirect(route('welcome'));
    }

    public function update(UpdateUserRequest $request)
    {
        $input = $request->only(['name', 'email', 'email_public', 'address', 'phone', 'avatar_url', 'iban', 'rib', 'bic', 'account_holder', 'domiciliation', 'mentions']);

        Auth::user()->update($input);
        return redirect()->route('dashboard');
    }

    public function register()
    {
        return view("register");
    }

}

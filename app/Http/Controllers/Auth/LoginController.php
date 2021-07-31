<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {

        $user = Socialite::driver('google')->stateless()->user();

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            auth()->login($existingUser, true);

            return redirect('/');
        } else {
            $newUser                        = new User;
            $newUser->provider_name         = 'google';
            $newUser->provider_id           = $user->getId();
            $newUser->name                  = $user->getName();
            $newUser->email                 = $user->getEmail();
            $newUser->email_verified_at     = now();
            $newUser->password_changed_at   = now();
            $newUser->type                  = 'admin';
            $newUser->avatar                = $user->getAvatar();
            $newUser->save();

            auth()->login($newUser, true);
        }
        return redirect()->route('home');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}

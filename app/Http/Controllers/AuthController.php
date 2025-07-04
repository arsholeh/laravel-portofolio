<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.index');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {


        $user = Socialite::driver('google')->user();

        $id = $user->id;
        $email = $user->email;
        $name = $user->name;

        $cek = User::where('email', $email)->count();

        if ($cek > 0) {
            $user = User::updateOrCreate(
                [
                    'email' => $email,
                    'name' => $name,
                    'google_id' => $id
                ]
            );

            Auth::login($user);

            return redirect('/dashboard');
        } else {
            return redirect('/auth')->with('error', ' akun yang kamu masukan tidak terdaftar');
        }
    }
}

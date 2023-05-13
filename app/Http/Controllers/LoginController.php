<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully logged in');
        }

        return redirect("login")->with(['loginError' => 'Oppes! Username or password is incorrect']);
    }

    public function logout(){
        Auth::logout();
        return redirect('innotive');
    }
}

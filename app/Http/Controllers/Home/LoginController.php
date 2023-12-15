<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('home.login');
    }
    public function auth(Request $req)
    {
        
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $req->session()->regenerate();
            return redirect()->route('home')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'failed' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    return redirect()->route('home');
}


}

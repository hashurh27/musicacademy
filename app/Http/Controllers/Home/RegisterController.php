<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('home.register');

    }
    public function store(UserRequest $req)
{
    if ($req->isMethod('POST')) {
        $validatedData = $req->validated();

        $user  = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => 'user',
            'status' => 'active',
        ]);
        if($user){
            return back()->with('success','db has been created');
        }else{
            return back()->with('failed','db not been created');

            
        }
    }
}

}

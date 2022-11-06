<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function login(UserRequest $request)
    {
        $data = $request->only('email','password');
        if(Auth::attempt($data))
            return redirect()->route('dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $hashedPassword = Hash::make($request->password);
        $user = User::create([
            'email' => $request->email,
            'password' => $hashedPassword
        ]);

        return $user;
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $token = $request->user()->createToken('auth_token');

            return ['token' => $token->plainTextToken];
        }

        return response('unauthorized', 401);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Credentials are incorrect'
            ], 403);
        }

        $user = Auth::user();

        $token = $user->createToken('login-token');

        return response()->json([
            'token' => $token->plainTextToken
        ]);
    }
}

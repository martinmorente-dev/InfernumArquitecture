<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(UserLoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password))
        {
            return response()->json([
                'status' => 'Error: Credenciales incorrectas'
            ], 401);
        }

        $token = $user->createToken('user-logged', ['buy', 'social'])->plainTextToken; // take the token of the user
        return [
            'status' => 'Ok',
            'user' => UserResource::make($user),
            'token' => $token
        ];
    }

    // TODO Register endpoint
    /*
    public function register(Request $request): void
    {
        $user = User::create($request);

        $token = $user->createToken()
    }
    */
}

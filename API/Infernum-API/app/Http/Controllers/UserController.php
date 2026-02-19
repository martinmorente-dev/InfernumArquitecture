<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    #[OA\Post(
        path: '/v1/login',
        operationId: 'loginUser',
        tags: ['Auth'],
        summary: 'Iniciar sesión de usuario',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(ref: '#/components/schemas/UserLoginRequest')
        ),
        responses: [
            new OA\Response(
                response: 200,
                description: 'Login exitoso',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'status', type: 'string', example: 'Successfull'),
                        new OA\Property(property: 'user', ref: '#/components/schemas/UserResource'),
                        new OA\Property(property: 'token', type: 'string', example: '1|abc123...')
                    ]
                )
            ),
            new OA\Response(
                response: 401,
                description: 'Credenciales incorrectas',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'status', type: 'string', example: 'Error: Incorrect credentials')
                    ]
                )
            )
        ]
    )]
    public function login(UserLoginRequest $request): JsonResponse
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['status' => 'Error: Incorrect credentials'], 401);
        }

        $token = $user->createToken('client', ['buy', 'social'])->plainTextToken;

        return response()->json([
            'status' => 'Successfull',
            'user' => UserResource::make($user),
            'token' => $token
        ], 200);
    }

    #[OA\Post(
        path: '/v1/register',
        operationId: 'registerUser',
        tags: ['Auth'],
        summary: 'Registrar nuevo usuario',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(ref: '#/components/schemas/UserRegisterRequest')
        ),
        responses: [
            new OA\Response(
                response: 201,
                description: 'Usuario creado',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'status', type: 'string', example: 'Successfull'),
                        new OA\Property(property: 'created-user', ref: '#/components/schemas/UserResource'),
                        new OA\Property(property: 'token', type: 'string', example: '1|abc123...')
                    ]
                )
            ),
            new OA\Response(
                response: 422,
                description: 'Datos inválidos',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'status', type: 'string', example: 'Error'),
                        new OA\Property(property: 'message', type: 'string', example: 'Bad data'),
                        new OA\Property(property: 'errors', type: 'object')
                    ]
                )
            )
        ]
    )]
    public function register(UserRegisterRequest $request): JsonResponse
    {
        $data = $request->validated();
        $data['role'] = 'client';

        $user = User::create($data);
        $token = $user->createToken('client', ['buy', 'social'])->plainTextToken;

        return response()->json([
            'status' => 'Successfull',
            'created-user' => UserResource::make($user),
            'token' => $token
        ], 201);
    }

  #[OA\Get(
        path: '/v1/user',
        operationId: 'getAuthenticatedUser',
        tags: ['Usuario'],
        security: [['sanctum' => []]],
        summary: 'Obtener usuario autenticado (TOKEN OBLIGATORIO)',
        description: '**¡SIN TOKEN = 401!**\n\n1. **POST /v1/login** → copia token\n2. **Authorize** → pega `Bearer {token} en el candado`. **Ejecuta esta ruta** ✅',
        responses: [
            new OA\Response(
                response: 200,
                description: 'Usuario OK',
                content: new OA\JsonContent(ref: '#/components/schemas/UserResource')
            ),
            new OA\Response(
                response: 401,
                description: 'TOKEN requerido',
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: 'status', type: 'string', example: 'Error: No autenticado')
                    ]
                )
            )
        ]
    )]



    public function getUserAuthenticated(Request $request): JsonResponse
    {
        return response()->json([
            'status' => 'Succesfull',
            'user' => $request->user()
        ]);
    }
}

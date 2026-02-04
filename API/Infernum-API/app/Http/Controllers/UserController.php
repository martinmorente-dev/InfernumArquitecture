<?php

namespace App\Http\Controllers;

use OpenApi\Annotations as OA;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;

/**
 * @OA\Info(
 *     title="Infernum API",
 *     version="0.1",
 *     description="Documentación de la API Infernum"
 * )
 *
 * @OA\Server(
 *     url=L5_SWAGGER_CONST_HOST,
 *     description="Servidor API"
 * )
 */
class UserController extends Controller
{
    /**
     * @OA\Post(
     *     path="/v1/login",
     *     operationId="loginUser",
     *     tags={"Auth"},
     *     summary="Iniciar sesión de usuario",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/UserLoginRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Login exitoso",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="Successfull"),
     *             @OA\Property(property="user", ref="#/components/schemas/UserResource"),
     *             @OA\Property(property="token", type="string", example="1|abc123...")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Credenciales incorrectas",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="Error: Incorrect credentials")
     *         )
     *     )
     * )
     */
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

    /**
     * @OA\Post(
     *     path="/v1/register",
     *     operationId="registerUser",
     *     tags={"Auth"},
     *     summary="Registrar nuevo usuario",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/UserRegisterRequest")
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Usuario creado",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="Successfull"),
     *             @OA\Property(property="created-user", ref="#/components/schemas/UserResource"),
     *             @OA\Property(property="token", type="string", example="1|abc123...")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Datos inválidos",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="Error"),
     *             @OA\Property(property="message", type="string", example="Bad data"),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     )
     * )
     */
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

    /**
     * @OA\Get(
     *     path="/v1/user",
     *     operationId="getAuthenticatedUser",
     *     tags={"Usuario"},
     *     security={{"sanctum":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Usuario OK",
     *         @OA\JsonContent(ref="#/components/schemas/UserResource")
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="No autenticado",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="Error: No autenticado")
     *         )
     *     )
     * )
     */
    public function getUserAuthenticated(Request $request): JsonResponse
    {
        return response()->json($request->user());
    }
}

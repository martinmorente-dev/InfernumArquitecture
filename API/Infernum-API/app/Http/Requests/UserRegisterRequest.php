<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'UserRegisterRequest',
    type: 'object',
    properties: [
        new OA\Property(property: 'email', type: 'string', format: 'email', example: 'user@example.com'),
        new OA\Property(property: 'nickname', type: 'string', example: 'john_doe'),
        new OA\Property(property: 'password', type: 'string', example: 'password123'),
    ],
    required: ['email', 'nickname', 'password']
)]
class UserRegisterRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'nickname' => 'required|unique:users,nickname',
            'password' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Tienes que especificar un email',
            'email.email' => 'Tienes que introducir un correo valido',
            'email.unique' => 'Este correo ya fue registrado',
            'nickname.required' => 'Tienes que especificar un nickname',
            'nickname.unique' => 'Este nickname ya esta escogido',
            'password.required' => 'Tienes que introducir tu contraseña'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'Error',
            'message' => 'Bad data',
            'errors' => $validator->errors()->toArray()
        ], 422));
    }
}

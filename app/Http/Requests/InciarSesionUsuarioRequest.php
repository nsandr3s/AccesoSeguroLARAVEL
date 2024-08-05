<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InciarSesionUsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:3|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'correo electrónico',
            'password' => 'contraseña',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El campo :attribute es obligatorio.',
            'password.required' => 'El campo :attribute es obligatorio.',
        ];
    }
}

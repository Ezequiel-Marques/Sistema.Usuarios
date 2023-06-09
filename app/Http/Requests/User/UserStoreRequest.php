<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'email' => 'email|required',
            'password' => 'string|required',
            'term' => 'accepted'
        ];
    }

    public function messages()
    {
        return [
            'string' => 'Esse campo precisa ser uma string',
            'required' => 'Esse campo é origatório',
            'email' => 'Esse campo deve ser um email',
            'accepted' => 'Aceite o termo'
        ];
    }
}

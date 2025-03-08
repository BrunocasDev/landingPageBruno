<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $englishLevels = config('constants.ENGLISH_LEVELS');

        return [
            'nome' => 'required|regex:/^[A-Za-z]+$/',
            'apelido' => 'required|regex:/^[A-Za-z]+$/',
            'idade' => 'required|integer|between:18,50',
            'telefone' => 'required|regex:/^9[1236]\d{7}$/',
            'email' => 'required|email',
            'concelho' => 'required|regex:/^[A-Za-z]+$/',
            'nivel-ingles' => 'required|in:' . implode(',', $englishLevels),
            'privacy-checkbox' => 'required|accepted',
        ];
    }
}

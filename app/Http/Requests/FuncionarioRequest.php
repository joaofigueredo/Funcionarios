<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
        return [
            'nome' => ['required', 'min:5'],
            'salario' => ['required', 'numeric'],
            'cargo' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo nome é obrigatório!',
            'nome.min' => 'minimo de 5 letras!',
            'salario.required' => 'Salario é obrigatório!',
            'salario.numeric' => 'Salario é numerico!',
            'cargo.required' => 'Cargo é obrigatório'
        ];
    }
}

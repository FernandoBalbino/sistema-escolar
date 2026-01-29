<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            //
            'nome' => 'required|string|max:255',
            'descricao' => 'required|nullable|string',
            'status' => 'required',
            'preco' => 'numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O campo nome deve ser uma string.',
            'nome.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'descricao.string' => 'O campo descrição deve ser uma string.',
            'status.required' => 'O campo status é obrigatório.',
            'preco.decimal' => 'O campo preço deve ser um número decimal com até 10 dígitos e 2 casas decimais.',
            'descricao.required' => 'O campo descrição é obrigatório.',
        ];
    }
}

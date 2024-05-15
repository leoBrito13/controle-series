<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            'nome' => 'required|min:3|string|max:255',
            // Adicione outras validações conforme necessário
        ];
    }

    public function messages(){
        return[
            'required' =>'O campo :attribute é obrigatório',
            'min' =>'O campo :attribute precisa ter pelo menos 3 caracteres'
        ];
    }
}

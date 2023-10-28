<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormLib extends FormRequest
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
            //Reglas de validacion 
            'txtISBN' => 'required|min:13|regex:/^[0-9]+$/',
            'txtTitulo' => 'required|max:50',
            'txtAutor' => 'required|max:50',
            'txtPaginas' => 'required|max:50|regex:/^[0-9]+$/',
            'txtEditorial' => 'required|max:50',
            'txtEmailEdit' => 'required|max:50|email',
        ];
    }
}

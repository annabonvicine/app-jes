<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required|min:6', //mínimo de 6 caracteres
        ];
    }

    //traduzir as mensagens de validação do formulario
    public function messages(){
        return[
            'name.required'=> 'Campo nome Obrigatório',
            'email.required'=> 'Campo E-mail Obrigatório',
            'email.required'=> 'Insira valido. Ex: example@site.com',
            'password.required'=> 'Campo senha Obrigatório',
            'password.min'=> 'A senha deve ter no mínimo :min caracteres!',
        ];
        
    }
}

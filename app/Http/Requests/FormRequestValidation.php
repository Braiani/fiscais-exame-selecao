<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'cpf' => 'required|regex:/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/',
            'identidade' => 'required|regex:/^\d+(\s[a-zA-Z]*)?(\/[a-zA-Z]*)?/',
            'pis' => 'required|numeric',
            'telefone' => 'required',
            'siape' => 'required_if:servidor,1|nullable|numeric',
            'compensacao' => 'required_if:servidor,1|nullable|numeric',
            'email' => 'required|email',
            'banco_id' => 'required|numeric',
            'agencia' => 'required',
            'conta' => 'required',
            'ano' =>'required|numeric',
            'local_prova_id' =>'required|numeric',
        ];
    }
}

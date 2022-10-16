<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImovelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'string|required|min:3|unique:imoveis,nome,'.$this->route('imovel.id'),
            'tipo_logradouro' => 'string|nullable',
            'logradouro' => 'string|required',
            'numero' => 'string|nullable',
            'bairro' => 'string|nullable',
            'CEP' => 'string|required',
            'municipio' => 'string|required',
            'observacao'  => 'string|nullable',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTelefoneRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'numero' => 'string|required|min:8|max:8|unique:telefones,numero,'.$this->route('telefone.id'),
            'imovel_id' => 'required|exists:imoveis,id',
        ];
    }
}


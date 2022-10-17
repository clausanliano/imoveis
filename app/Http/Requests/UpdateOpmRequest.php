<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOpmRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'string|required|unique:opms,nome,'.$this->route('opm.id'),
            'imovel_id' => 'required|exists:imoveis,id',
            'observacao'  => 'string|nullable',
        ];
    }
}


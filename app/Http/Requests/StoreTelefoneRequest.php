<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTelefoneRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'numero' => 'string|required|min:8|max:8|unique:telefones',
            'imovel_id' => 'required|exists:imoveis,id',
            'observacao'  => 'string|nullable',
        ];
    }
}

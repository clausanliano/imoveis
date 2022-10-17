<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOpmRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'string|required|unique:opms',
            'imovel_id' => 'required|exists:imoveis,id',
            'observacao'  => 'string|nullable',
        ];
    }
}

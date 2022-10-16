<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $table = 'imoveis';

    protected $fillable = ['nome', 'tipo_logradouro', 'logradouro', 'numero', 'bairro', 'CEP', 'municipio', 'observacao'];


    public function endereco()
    {
        return $this->tipo_logradouro.' '.$this->logradouro.' '.$this->numero;
    }

}

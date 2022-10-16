<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    protected $table = 'telefones';

    protected $fillable = ['numero', 'imovel_id', 'observacao'];


    public function imovel()
    {
        return $this->belongsTo(Imovel::class, 'imovel_id', 'id');
    }


}

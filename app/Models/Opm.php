<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opm extends Model
{
    use HasFactory;

    protected $table = 'opms';

    protected $fillable = ['nome', 'imovel_id', 'observacao'];


    public function imovel()
    {
        return $this->belongsTo(Imovel::class, 'imovel_id', 'id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    public $timestamps = false;
    protected $fillable =['nome','descricao','preco'];

    public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

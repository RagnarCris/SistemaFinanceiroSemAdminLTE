<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =['nome','descricao','preco'];

    public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

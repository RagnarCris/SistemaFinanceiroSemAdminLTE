<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =['nome','descricaoo','preco'];

    public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

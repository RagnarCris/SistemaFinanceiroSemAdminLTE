<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //
    protected $fillable =['nome','telefone','endereco'];

    public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

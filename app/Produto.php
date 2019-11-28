<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    protected $fillable =['nome','descricao','preco'];

    public function transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

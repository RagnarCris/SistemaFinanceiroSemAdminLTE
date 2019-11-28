<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviço extends Model
{
    //
    protected $fillable =['Nome','Descrição','Preço'];

    public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

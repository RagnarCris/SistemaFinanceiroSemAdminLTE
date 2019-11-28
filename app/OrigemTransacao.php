<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrigemTransacao extends Model
{
    //
    protected $fillable =['Nome','Descrição'];

    public function Transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

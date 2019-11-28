<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrigemTransacao extends Model
{
    public $timestamps = false;
    protected $fillable =['nome','descricao'];

    public function transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

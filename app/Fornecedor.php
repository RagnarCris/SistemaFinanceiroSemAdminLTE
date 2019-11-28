<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    public $timestamps = false;
    protected $fillable =['nome'];

    public function transacao()
    {
        return $this->$this->hasMany(Transacao::class);
    }
}

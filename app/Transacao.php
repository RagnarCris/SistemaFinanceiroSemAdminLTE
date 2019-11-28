<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    public $timestamps = false;
    protected $fillable =['nome','descricao','tipo','valorPrevisto','valorRecebido','data'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
    public function servico()
    {
        return $this->belongsTo(Servico::class);
    }
    public function forncedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
    public function origem()
    {
        return $this->belongsTo(OrigemTransacao::class);
    }
}

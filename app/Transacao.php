<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    //
    protected $fillable =['Nome','Descrição','Tipo','ValorPrevisto','ValorRecebido','Data'];

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
        return $this->belongsTo(Serviço::class);
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

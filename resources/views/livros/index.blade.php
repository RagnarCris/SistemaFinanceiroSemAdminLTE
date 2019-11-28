@extends('layout')

@section('cabecalho')
<div class="d-flex justify-content-center p-5">
    Sistema Financeiro
</div>

@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<img class="mainImage center" style="width: 40%" src="http://www.pngimagenes.com/uploads/icone-de-livro/retangulo-arquivo-de-computador-computador-icones-de-clipart-library-Gzyjwf.png" alt="Ícone representando uma livraria">
<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-lg-center">
        
    </li>
</ul>
@endsection
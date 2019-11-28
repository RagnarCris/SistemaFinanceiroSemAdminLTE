@extends('layout')
@section('cabecalho')
<div class="d-flex justify-content-center p-5">
Transações
</div>
@endsection

@section('conteudo')
@if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Tipo</th>
            <th scope="col">Valor Previsto</th>
            <th scope="col">Valor Recebido</th>
            <th scope="col">Data</th>
            

        </tr>
        </thead>
        @foreach ($transacoes as $transacao)
        <tbody>
        <tr>
            <td scope="row">{{ $transacao->id }}</td>
            <td>  {{ $transacao->nome }} </td>
            <td>{{ $transacao->descricao }} </td>
            <td>{{ $transacao->tipo }} </td>
            <td>{{ $transacao->valorPrevisto }} </td>
            <td>{{ $transacao->valorRecebido }} </td>
            <td>{{ $transacao->data }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
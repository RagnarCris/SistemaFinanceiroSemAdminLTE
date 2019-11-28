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
        @foreach ($fornecedor as $fornecedor)
        <tbody>
        <tr>
            <td scope="row">{{ $fornecedor->id }}</td>
            <td>  {{ $fornecedor->nome }} </td>
            <td>{{ $fornecedor->descricao }} </td>
            <td>{{ $fornecedor->tipo }} </td>
            <td>{{ $fornecedor->valorPrevisto }} </td>
            <td>{{ $fornecedor->valorRecebido }} </td>
            <td>{{ $fornecedor->data }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
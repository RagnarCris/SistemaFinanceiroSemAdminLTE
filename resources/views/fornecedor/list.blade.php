@extends('layout')
@section('cabecalho')
<div class="d-flex justify-content-center p-5">
Produtos
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
            <th scope="col">CNPJ</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
        </tr>
        </thead>
        @foreach ($fornecedores as $fornecedor)
        <tbody>
        <tr>
            <td scope="row">{{ $fornecedor->id }}</td>
            <td>  {{ $fornecedor->nome }} </td>
            <td>  {{ $fornecedor->cnpj }} </td>
            <td>  {{ $fornecedor->telefone }} </td>
            <td>  {{ $fornecedor->endereco }} </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
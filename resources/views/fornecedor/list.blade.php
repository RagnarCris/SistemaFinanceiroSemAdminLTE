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
            <th scope="col">Nome de Origem</th>
        </tr>
        </thead>
        @foreach ($fornecedor as $fornecedor)
        <tbody>
        <tr>
            <td scope="row">{{ $fornecedor->id }}</td>
            <td>  {{ $fornecedor->nomeOrigem }} </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
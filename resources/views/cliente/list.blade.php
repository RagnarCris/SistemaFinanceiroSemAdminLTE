@extends('layout')
@section('cabecalho')
<div class="d-flex justify-content-center p-5">
Clientes
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
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>

        </tr>
        </thead>
        @foreach ($clientes as $cliente)
        <tbody>
        <tr>
            <td scope="row">{{ $cliente->id }}</td>
            <td>  {{ $cliente->nome }} </td>
            <td>{{ $cliente->telefone }} </td>
            <td>{{ $cliente->endereco }} </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
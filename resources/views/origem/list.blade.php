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
            <th scope="col">Descrição</th>

        </tr>
        </thead>
        @foreach ($origens as $origem)
        <tbody>
        <tr>
            <td scope="row">{{ $origem->id }}</td>
            <td>  {{ $origem->nome }} </td>
            <td>{{ $origem->descricao }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
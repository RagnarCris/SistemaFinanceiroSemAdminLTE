@extends('layout')

@section('cabecalho')
<div class="d-flex justify-content-center p-5">
    Resultado
</div>
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<div class="container">
    @if(isset($details))
    <h2>Informações do livro</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Tipo</th>
                <th>ID da Editora</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $livro)
            <tr>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->autor }}</td>
                <td>{{ $livro->ano }}</td>
                <td>{{ $livro->preco }}</td>
                <td>{{ $livro->quantidade }}</td>
                <td>{{ $livro->tipo }}</td>
                <td>{{ $livro->idEd }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
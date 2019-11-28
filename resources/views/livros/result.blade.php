@extends('layout')

@section('cabecalho')
<div class="d-flex justify-content-center p-5">
    Resultado
</div>
@endsection

@section('conteudo')

<div class="container">
    @if(isset($details))
        <p> Os resultados da sua pesquisa para <b> {{ $query }} </b> são:</p>
    <h2>Resultados Encontrados</h2>
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
                <th>Ações</th>

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
                <td>
                    <form method="get" action="/livros/alterar/{{ $livro->id }}">
                        @csrf
                        <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    </form>
                    <form method="post" action="/livros/{{ $livro->id }}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($livro->titulo) }}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
@extends('layout')

@section('cabecalho')
<div class="d-flex justify-content-center p-5">
    Editoras
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
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>ID</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $editora)
            <tr>
                <td>{{ $editora->nome }}</td>
                <td>{{ $editora->id }}</td>
                <td>
                    <form method="post" action="/editoras/{{ $editora->id }}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($editora->nome) }}?')">
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
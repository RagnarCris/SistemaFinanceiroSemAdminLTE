@extends('layout')

@section('cabecalho')
<div class="d-flex justify-content-center p-5">
    Acervo
</div>
@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<ul class="list-group">
    @foreach ($livros as $livro)
    <li class="list-group-item d-flex justify-content-between align-items-lg-center">
        {{ $livro->titulo }} 
        <div>
        <form method="get" action="/livros/detalhes/{{ $livro->id }}">
            @csrf
            <button class="btn btn-primary btn-sm"><i class="far fa-eye"></i></button>
        </form>
        <form method="get" action="/livros/alterar/{{ $livro->id }}">
            @csrf
            <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
        </form>
        <form method="post" action="/livros/{{ $livro->id }}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($livro->titulo) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
        </form>
        </div>
    </li>
    @endforeach
</ul>
@endsection
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Financeiro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/24393ea767.js" crossorigin="anonymous"></script>


</head>
<body>
<style>
form{
    display:inline-block;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
<div class="container">
        <div class="jumbotron p-0">
            <h1>@yield('cabecalho')</h1>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" style="padding: 1% 5% 1% 5%">
                        <a class="nav-link" href="{{ route('index_clientes') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active" style="padding: 1% 5% 1% 5%">
                        <a class="nav-link" href="{{ route('criar_cliente') }}">Cadastrar Cliente <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active" style="padding: 1% 5% 1% 5%">
                        <a class="nav-link" href="{{ route('criar_produto') }}">Cadastrar Produto <span class="sr-only">(current)</span></a>
                    </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="/livros/pesquisa">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </div>
        @yield('conteudo')
</div>
</body>
</html>
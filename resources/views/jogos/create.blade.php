@extends('layouts.app')

@section('title', 'Criação')

@section('content')
<div class="container mt-5">
    <h1>Crie um Novo Jogo</h1>
    <hr>
    <form action="{{ route('jogos-store') }}" method="POST">
    @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="gênero">Gênero:</label>
                <input class="form-control" type="text" name="gênero" placeholder="Digite um Gênero...">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_de_lançamento">Ano de Lançamento:</label>
                <input class="form-control" type="number" name="ano_de_lançamento" placeholder="Digite o Ano de Lançamento...">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input class="form-control" type="number" step="0.01" name="valor" placeholder="Digite o Valor...">
            </div>
            <br>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
            </div>
        </div>
    </form>
</div>
@endsection
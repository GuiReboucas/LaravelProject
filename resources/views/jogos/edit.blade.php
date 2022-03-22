@extends('layouts.app')

@section('title', 'Edição')

@section('content')
<div class="container mt-5">
    <h1>Editar jogo</h1>
    <hr>
    <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" value="{{ $jogos->nome }}" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group">
                <label for="gênero">Gênero:</label>
                <input class="form-control" type="text" name="gênero" value="{{ $jogos->gênero }}" placeholder="Digite um Gênero...">
            </div>
            <br>
            <div class="form-group">
                <label for="ano_de_lançamento">Ano de Lançamento:</label>
                <input class="form-control" type="number" name="ano_de_lançamento" value="{{ $jogos->ano_de_lançamento }}" placeholder="Digite o Ano de Lançamento...">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input class="form-control" type="number" name="valor" value="{{ $jogos->valor }}" placeholder="Digite o Valor...">
            </div>
            <br>
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit" value="Atualizar">
            </div>
        </div>
    </form>
</div>
@endsection
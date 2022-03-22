@extends('layouts.app')

@section('title', 'Amostra de Item')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9">
            <h1>Listagem de Jogo</h1>
        </div>
        <div class="col-sm-3">
            <a href="{{ route('jogos-index') }}" class="btn btn-success">Voltar</a>
        </div>
    </div>

    <table class="table table-striped table-dark" style="width: auto;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Gênero</th>
                <th scope="col">Ano de Lançamento</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">{{ $jogos->id }}</th>
                <td>{{ $jogos->nome }}</td>
                <td>{{ $jogos->gênero }}</td>
                <td style="text-align: center;">{{ $jogos->ano_de_lançamento }}</td>
                <td>{{ $jogos->valor }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
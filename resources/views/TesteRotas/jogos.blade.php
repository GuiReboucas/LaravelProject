<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
</head>
<body>
    <h1>Teste de Rotas</h1> 
    <p>Id do Jogo: {{$idJogo}}</p> 
    <p>Nome do Jogo: {{$nomeJogo}}</p> 

    <a href="{{ route('siteJogo') }}">Link para a página de um jogo</a>
</body>
</html>
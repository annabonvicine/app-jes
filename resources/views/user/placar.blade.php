<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{url('CSS/style.css')}}">
    <script src="JS/script.js"></script>
    <title>Placar</title>
</head>
<body>
    <header>
        <div class="nav">
            <div class="nav-left">
                <i class="bi bi-list" id="menu-button" onclick="ativarMenu()"></i>
            </div>
            <div class="nav-middle">
                <h1 id="titulo-placar">Placar</h1>
            </div>
            <div class="nav-right">
                <img src="./images/timbre_sesi_senai.png" alt="">
            </div>
        </div>
        <div class="menu">
            <ul class="menu-items">
                <li><i class="bi bi-house"></i><a href="">Ínicio</a></li>
                <li><i class="bi bi-calendar"></i><a href="">Cronograma</a></li>
                <li><i class="bi bi-shield-fill"></i><a href="">Cadastro Time</a></li>
                <li><i class="bi bi-person-fill"></i><a href="">Cadastro Jogador</a></li>
                <li><i class="bi bi-box-arrow-left"></i><a href="">Sair</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container-placar">
            <div class="time-placar" id="time1">
                <h1 id="pontuacao1">0</h1>
                <button class="botao-mais" onclick="adicionarPonto(time1)"><i class="bi bi-plus"></i></button>
                <button class="botao-menos" onclick="removerPonto(time1)"><i class="bi bi-dash"></i></button>
                <h1 id="time-nome">Time1</h1>
            </div>
            <h1 id="x">X</h1>
            <div class="time-placar" id="time1">
                <h1 id="pontuacao2">0</h1>
                <button class="botao-mais" onclick="adicionarPonto(time2)"><i class="bi bi-plus"></i></button>
                <button class="botao-menos" onclick="removerPonto(time2)"><i class="bi bi-dash"></i></button>
                <h1 id="time-nome">Time2</h1>
            </div>
        </div>
        <div class="container-botoes">
            <button>Voltar</button>
            <button>Concluir</button>
        </div>
    </main>
    
</body>
</html>

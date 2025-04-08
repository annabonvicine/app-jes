<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <title>Cronograma</title>
</head>
<style>


</style>

<body>
    <header>
        <div class="nav">
            <div class="nav-left">
                <i class="bi bi-list" id="menu-button" onclick="ativarMenu()"></i>
            </div>
            <div class="nav-middle">
                <h1 id="titulo-cronograma">Cronograma</h1>
            </div>
            <div class="nav-right">
                <img src="./images/timbre_sesi_senai.png" alt="">
            </div>
        </div>
    </header>
    <div class="menu">
        <ul class="menu-items">
            <li><i class="bi bi-house"></i><a href="{{ route('user.index') }}">Ínicio</a></li>
            <li><i class="bi bi-calendar"></i><a href="{{ route('user.cronograma') }}">Cronograma</a></li>
            <li><i class="bi bi-shield-fill"></i><a href="">Cadastro Time</a></li>
            <li><i class="bi bi-person-fill"></i><a href="">Cadastro Jogador</a></li>
            <li><i class="bi bi-box-arrow-left"></i><a href="{{ route('user.entrar') }}">Sair</a></li>
        </ul>
    </div>
    <main>
        <div class="container-jogos">
            <button id="criar-jogo"><i class="bi bi-plus-lg"></i></button>
        </div>
        <div class="overlay" id="overlay">
            <div class="modal">
                <h2>Cadastro de Jogos</h2>
                <input type="text" placeholder="Time 1">
                <input type="text" placeholder="Time 2">
                <div class="input-group">
                    <input type="date">
                    <input type="time" placeholder="Horário">
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Esporte">
                    <input type="text" placeholder="Gênero">
                </div>
                <button>CRIAR</button>
            </div>
        </div>
    </main>


    <script src={{url('JS/script.js')}}></script>
    <script src={{url('JS/cronograma.js')}}></script>
</body>

</html>

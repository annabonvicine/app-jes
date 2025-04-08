<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
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
                <button class="mais" onclick="adicionarPonto(1)"><i class="bi bi-plus"></i></button>
                <button class="menos" onclick="removerPonto(1)"><i class="bi bi-dash"></i></button>
                <h1 id="time-nome">Time1</h1>
            </div>
            <div id="id"><h1>X</h1></div>
            <div class="time-placar" id="time2">
                <h1 id="pontuacao2">0</h1>
                <button class="mais" onclick="adicionarPonto(2)"><i class="bi bi-plus"></i></button>
                <button class="menos" onclick="removerPonto(2)"><i class="bi bi-dash"></i></button>
                <h1 id="time-nome">Time2</h1>
            </div>
        </div>
        <div class="botoes-placar">
            <button>Voltar</button>
            <button>Concluir</button>
        </div>
        <div class="overlay" id="overlay-cronograma">
            <div class="modal placar" >
                <h2>Selecione o Jogador</h2>
                <form action="" class="lista-jogadores">
                    <label>
                        <input type="checkbox" name="jogadores" value="1" onclick="verificarCheckbox()">
                        Jogador
                    </label>
                    <label>
                        <input type="checkbox" name="jogadores" value="2" onclick="verificarCheckbox()">
                        Jogador
                    </label>
                    <label>
                        <input type="checkbox" name="jogadores" value="3" onclick="verificarCheckbox()">
                        Jogador
                    </label>
                    <label>
                        <input type="checkbox" name="jogadores" value="4" onclick="verificarCheckbox()">
                        Jogador
                    </label>
                    <label>
                        <input type="checkbox" name="jogadores" value="5" onclick="verificarCheckbox()">
                        Jogador
                    </label>
                    <label>
                        <input type="checkbox" name="jogadores" value="6" onclick="verificarCheckbox()">
                        Jogador
                    </label>
                    <label>
                        <input type="checkbox" name="jogadores" value="7" onclick="verificarCheckbox()">
                        Jogador
                    </label>
                    <label>
                        <input type="checkbox" name="jogadores" value="8" onclick="verificarCheckbox()">
                        Jogador
                    </label>
                </form>
                <button id="enviar" type="submit" onclick="fecharModal()">Enviar</button>
            </div>
        </div>
    </main>
    <script src={{url('JS/script.js')}}></script>
    <script src={{url('JS/placar.js')}}></script>
    
    
</body>
</html>

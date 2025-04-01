<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('CSS/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="JS/script.js"></script>
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
            <li><i class="bi bi-house"></i><a href="">Ínicio</a></li>
            <li><i class="bi bi-calendar"></i><a href="">Cronograma</a></li>
            <li><i class="bi bi-shield-fill"></i><a href="">Cadastro Time</a></li>
            <li><i class="bi bi-person-fill"></i><a href="">Cadastro Jogador</a></li>
            <li><i class="bi bi-box-arrow-left"></i><a href="">Sair</a></li>
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

    <script>
        function abrirModal() {
            document.getElementById("overlay").classList.add("ativo");
        }

        function fecharModal() {
            document.getElementById("overlay").classList.remove("ativo");
        }

        // Adicionar evento no botão "+"
        document.querySelector(".container-jogos button").addEventListener("click", abrirModal);

        // Fe
        document.getElementById("overlay").addEventListener("click", function(e) {
            if (e.target === this) fecharModal();
        });

        function criarCard(time1, time2, data, horario, esporte, genero) {
            const containerJogos = document.querySelector('.container-jogos');

            // Cria o elemento do card
            const card = document.createElement('div');
            card.classList.add('card-cronograma');

            card.innerHTML = `
        <div class="data-cronograma">
            <h1>${data} - ${horario}</h1>
            <p>${esporte} - ${genero}</p>
        </div>
        <div class="jogo-cronograma">
            <div class="time-cronograma">
                <img src="./images/emblema.png" alt="">
                <p>${time1}</p>
            </div>
            <h1>X</h1>
            <div class="time-cronograma">
                <img src="./images/emblema.png" alt="">
                <p>${time2}</p>
            </div>
        </div>
        <div class="cronograma-botao">
            <button>Iniciar</button>
        </div>
    `;

            // Adiciona o novo card ao container
            containerJogos.appendChild(card);
        }

        // Captura o clique no botão "CRIAR" do modal
        const criarBtn = document.querySelector('.modal button');
        criarBtn.addEventListener('click', () => {
            // Pega os valores dos inputs
            const time1 = document.querySelector('.modal input[placeholder="Time 1"]').value;
            const time2 = document.querySelector('.modal input[placeholder="Time 2"]').value;
            const data = document.querySelector('.modal input[type="date"]').value;
            const horario = document.querySelector('.modal input[type="time"').value;
            const esporte = document.querySelector('.modal input[placeholder="Esporte"]').value;
            const genero = document.querySelector('.modal input[placeholder="Gênero"]').value

            // Verifica se os campos estão preenchidos
            if (time1 && time2 && data && horario && esporte && genero) {
                criarCard(time1, time2, data, horario, esporte, genero);
                fecharModal(); // Fecha o modal após criar o card
            } else {
                alert('Por favor, preencha todos os campos!');
            }
        });

        // Função para fechar o modal
        function fecharModal() {
            const overlay = document.getElementById('overlay');
            overlay.classList.remove('ativo');
        }
    </script>


</body>

</html>

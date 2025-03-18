<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>JES-2025</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bayon&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }

        header {
            height: 100px;
            background-color: #e30613;
            color: white
        }


        main {
            display: flex;
            flex-direction: column;
        }

        section {
            width: 100%;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            padding: 2em 4em;
        }


        .nav-left {
            font-size: 50px;
            color: white;
            background: transparent;
            border: none;
            cursor: pointer;

        }

        .nav-middle {
            font-size: 30px;
            cursor: default;
        }

        .nav-middle>h1 {
            font-family: "Bayon", sans-serif;
            letter-spacing: 20px;
            font-weight: 400;
            position: relative;
            left: 100px;
        }

        .nav-right {
            cursor: pointer;
        }

        .nav-right>img {
            width: 250px;

        }

        .ao-vivo {
            width: 100%;
            display: flex;
            padding: 2em;
        }

        .campo-esquerda {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 60%;
            gap: 0.4em;
        }

        .modalidade {
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 0.7em;
            font-size: 25px;
        }

        .modalidade>p {
            color: red;
            font-size: 30px;
            font-weight: 700;
        }

        .placar-principal {
            display: flex;
            justify-content: center;
            gap: 100px;
            width: 100%;
            padding: 0em;
            align-items: center;

        }

        .placar-principal>h1 {

            font-size: 30px;
        }

        .time {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            font-size: 30px;
            font-weight: 600;
        }

        .time>img {
            width: 100px;
        }

        .score {
            font-size: 30px;
        }

        .campo-direita {
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
            justify-content: space-evenly;
            width: 40%;
            gap: 50px;
            height: 300px;
            overflow-y: auto;
        }

        .player-score {
            display: flex;
            align-items: center;
            gap: 1em;
        }

        .player-score>img {
            width: 60px;
        }

        .campo-cronograma {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            width: 100%;
            padding: 1em;
        }

        .card-jogo {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1em;
            border: 4px solid black;
            border-radius: 10px;
            width: 300px;
            height: 220px;
            padding: 0.5em;
        }

        .data {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .jogo {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .time-card {
            display: flex;
            align-items: center;
            flex-direction: column;
            font-size: 15px;
            height: 80px;
        }

        .time-card>img {
            width: 50px;
        }

        .modalidade-card {
            font-size: 15px;
        }

        .sem-placar {
            margin-top: 30px;
            background-color: #e30613;
        }
    </style>
</head>

<body>
    <header>
        <div class="nav">
            <div class="nav-left">
                <i class="bi bi-box-arrow-in-right"></i>
            </div>
            <div class="nav-middle">
                <h1>JES-2025</h1>
            </div>
            <div class="nav-right">
                <img src="./images/timbre_sesi_senai.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="placar ao-vivo">
                <div class="campo-esquerda">
                    <div class="modalidade">
                        <h1>Esporte-Fem/Masc</h1>
                        <p>Ao Vivo</p>
                    </div>
                    <div class="placar-principal">
                        <div class="time direita">
                            <img src="./images/emblema.png" alt="">
                            <p>Nome</p>
                        </div>
                        <div class="score time1">
                            <h1>1</h1>
                        </div>
                        <h1>X</h1>
                        <div class="score time2">
                            <h1>1</h1>
                        </div>
                        <div class="time esquerda">
                            <img src="./images/emblema.png" alt="">
                            <p>Nome</p>
                        </div>
                    </div>
                </div>
                <div class="campo-direita">
                    <div class="player-score">
                        <img src="./images/user.png" alt="">
                        <h1>GOLLLL</h1>
                    </div>
                    <div class="player-score">
                        <img src="./images/user.png" alt="">
                        <h1>GOLLLL</h1>
                    </div>
                    <div class="player-score">
                        <img src="./images/user.png" alt="">
                        <h1>GOLLLL</h1>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="campo-cronograma">
                <div class="card-jogo">
                    <div class="data">
                        <h1>HOJE</h1>
                        <p>14:00</p>
                    </div>
                    <div class="jogo">
                        <div class="time-card">
                            <img src="./images/emblema.png" alt="">
                            <h1>1</h1>
                        </div>
                        <h1>X</h1>
                        <div class="time-card">
                            <img src="./images/emblema.png" alt="">
                            <h1>1</h1>
                        </div>
                    </div>
                    <div class="modalidade-card">
                        <h1>Esporte-Fem/Masc</h1>
                    </div>
                </div>
                <div class="card-jogo">
                    <div class="data">
                        <h1>HOJE</h1>
                        <p>14:00</p>
                    </div>
                    <div class="jogo">
                        <div class="time-card">
                            <img src="./images/emblema.png" alt="">
                            <h1>1</h1>
                        </div>
                        <h1>X</h1>
                        <div class="time-card">
                            <img src="./images/emblema.png" alt="">
                            <h1>1</h1>
                        </div>
                    </div>
                    <div class="modalidade-card">
                        <h1>Esporte-Fem/Masc</h1>
                    </div>
                </div>
                <div class="card-jogo">
                    <div class="data">
                        <h1>HOJE</h1>
                        <p>14:00</p>
                    </div>
                    <div class="jogo">
                        <div class="time-card">
                            <img src="./images/emblema.png" alt="">
                            <h1 id="placar-card"></h1>
                        </div>
                        <h1>X</h1>
                        <div class="time-card">
                            <img src="./images/emblema.png" alt="">
                            <h1 id="placar-card"></h1>
                        </div>
                    </div>
                    <div class="modalidade-card">
                        <h1>Esporte-Fem/Masc</h1>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <script src="script.js"></script>
</body>

</html>

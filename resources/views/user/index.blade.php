<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('CSS/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>JES-2025</title>

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

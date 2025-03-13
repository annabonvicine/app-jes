<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Jes- sesi</title>
    {{-- <link rel="stylesheet" href="../../css/entrar.css"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bayon&display=swap');


        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }


        body {
            background-image: url("../images/fundo.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: bold;

        }

        header {
            height: 100px;
            background: transparent;
            color: white
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
    </style>
</head>

<body>
    <header>
        <div class="nav">
            <div class="nav-left">

            </div>
            <div class="nav-middle">
                <h1></h1>
            </div>
            <div class="nav-right">
                <img src="./images/timbre_sesi_senai.png" alt="">
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="login">
                <div class="titulo-login">
                    <h1>LOGIN</h1>
                </div>
                <div class="campo-login">
                    <form class="form-login">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Senha">
                    </form>
                </div>
                <div class="campo-botoes">
                    <button>Voltar</button>
                    <button>Entrar</button>
                </div>

            </div>
        </div>
    </main>
</body>

</html>

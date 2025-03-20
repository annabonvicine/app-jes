<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bayon&family=Bebas+Neue&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

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
        height: 100vh;
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

    .nav-right {
        cursor: pointer;
    }

    .nav-right>img {
        width: 250px;

    }


    main{
        display: flex;
        height: 100vh;
        width: 100%;
        align-items: center;
        justify-content: center;
        position: absolute;
        bottom: 30px;
    }

    .container{
        top: 40px;
        height: 60%;
        width: 25%;
        background-color:#e30613 ;
        position: relative;
        border-radius: 47px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        height: 100%;
    }

    .titulo-login{
        position: relative;
        color: white;
        font-family: "Bayon", sans-serif;
        font-weight: 400;
        letter-spacing: 3px;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .titulo-login>hr{
        width: 20em;
    }
    .campo-login{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height:60%;
        padding-bottom: 40px;
        align-items: center;
        gap: 10px;
    }

    .form-login{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 50px;
        width: 100%;
    }

    .form-login>input{
        width: 270px;
        height: 40px;
        border: none;
        border-radius: 10px;
        padding-left: 10px;
        font-size: 17px;
        outline: none;
    }

    .buttons{
        display: flex;
        gap: 30px;
        
    }

    .buttons>button{
        width: 125px;
        height: 45px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 10px;
        font-size: 17px;
        cursor: pointer;
    }


</style>
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
                    <hr>
                </div>
                <div class="campo-login">
                    <form class="form-login">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Senha">
                    </form>
                    <div class="buttons">
                        <button>Voltar</button>
                        <button>Entrar</button>
                    </div>
                    
                </div>

            </div>
        </div>
    </main>
</body>
</html>
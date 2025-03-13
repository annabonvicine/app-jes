<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jes- sesi</title>
  {{-- <link rel="stylesheet" href="../../css/entrar.css"> --}}
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

body{
    background-image: url(../storage/images/fundo.jpg);    
    background-size: cover;
    background-repeat: no-repeat;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    font-style: bold;
    
}

header{
    background-color: #e30613;
    height: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #ffff;
    padding: 0 2rem;
}

.title{
    position: relative;
    left: -70px;
}

.title h1{
    font-family: "Bebas Neue", sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 50px;
    letter-spacing: 20px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}


.logo-senai{
    width: 90px;
    height: 30px;
    padding-right: 5px;
    padding-top: 5px;
}

.navbar{
    display: flex;
    justify-content: flex-end;
}

.form{
    display: flex;
    width: 280px;
    height: 330px;
    background-color: #CA0404;
    flex-direction: column;
    align-items: center;
    border-radius: 25px;
    font-family: "Bebas Neue", sans-serif;
    font-weight: 400;
    font-style: normal;

}

.text-login{
    font-family: "Bebas Neue", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: whitesmoke;
    font-size: 30px;
    padding-top: 25px;
}

.container{
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding-top: 120px;
}

.botoes{
    display: flex;
    justify-content: space-around;
}

.form-control{
    border-radius: 8px;
    height: 30px;
    width: 230px;
    border: none;
}

.botao{
    cursor: pointer;
    border-radius: 10px;
    height: 35px;
    width: 100px;
    border: none;
    color: whitesmoke;
    background-color: black;
}

.linha{
    height: 1px;
    width: 280px;
    background-color: whitesmoke;
}

.form-butom{
    padding-top: 30px;
}

.login{
    cursor: pointer;
}


  </style>
</head>
<body>
  <header>
    <img src="../../../storage/images/timbre_sesi_senai.png" alt="" width="200px">
    <div class="title">
        <h1>JES-2024</h1>
    </div>
    <div class="login"><a href=""><img src="../../../storage/images/login.png" alt="" width="40px"></div></a>
  </header>
  <main>
    <div class="container">
        <div class="form">
            <div class="text-login">
            L o g i n
            </div>
            <div class="linha">
            </div>
            <br>
            <div class="form-butom">
              <form action="valida_login.php" method="post">
                <div class=" ">
                  <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                </div>
                <br>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                </div>
                

                <div class="text-danger">
                  Usuário ou senha invalido(s)!
                </div>
                
                


                <div class="text-danger">
                  Faça o login primeiro!!!
                </div>
    
              
                <br>
                <br>
                <div class="botoes">
                    <button class="botao" type="submit">Voltar</button>
                    <button class="botao" type="submit">Entrar</button>
                </div>
              </form>
            </div>
        </div>
    </div>
  </main>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jes- sesi</title>
  <link rel="stylesheet" href="../../css/entrar.css">
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    

body{
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
    left: 130px;
}

.title h1{
    font-family: "Bebas Neue", sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 50px;
    letter-spacing: 20px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
}

.menu{
    background-color: transparent;
    border: none;
    cursor: pointer;
}

.vertical-menu{
    background-color: #e30613;
    list-style: none;
    font-size: 20px;
    position: absolute;
    top: 80px;
    height: 500px;
    width: 250px;
    left: 0;
    padding-top: 40px;
    display: flex;
    flex-direction: column;
    border-radius: 0 0 30px;
    box-shadow: -10px 10px 15px rgba(0, 0, 0, 0.3);
    display: none;
}

li{
    padding-bottom: 30px;
}

a{
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
    
}

#logout{
    margin-top: 200px
}

main{
    display: flex;
    flex-wrap: wrap;
    width:100%;
    justify-content: space-evenly;
    gap: 30px;
    padding-top: 2rem;
    padding-bottom: 2rem;
    align-items: center;
}

.timeline-card{

    display: flex;
    flex-direction: column;
    align-items: center;
    border: 5px solid #000;
    border-radius: 20px;
    padding-left: 3rem;
    padding-right: 3rem;
    padding-top: 1rem;
    padding-bottom: 1rem;
    height: 275px;
    width: 280px;
    justify-content: center; /* Centraliza os elementos verticalmente */
    align-items: center;
    
}

.timeline-date{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 0.2rem;

}

.timeline-date h1{
    margin-bottom: 0;
    font-size: 20px;
    
}

.timeline-date p{
    font-size: 20px;
    margin-top: 0;
}

.timeline-score{
    display: flex;
    align-items: center; 
    justify-content: center;
    gap: 60px; 
    margin: -1rem; 
}

.timeline-squad{
    position: relative;
    top: 10px;
    padding-bottom: 10px;
    z-index: -1;
}
#ponto{
    font-size: 30px;
    text-align: center;
    -top: -0.5rem;
    position: relative;
}

.timeline-score h1{
    font-size: 40px;
    padding-left: 0.5rem;
    padding-right: 0.5rem;
    top: -20px;
}

.timeline-modalidade p{
    font-size: 20px;
    margin-top: -10px;
    font-weight: bolder;
}

.iniciar{
    position: relative;
    left:100px;
    border-radius: 80px;
    background-color: green;
    border: none;
    height: 40px;
    width: 100px;
    font-size: 15px;
    color: #fff;
}

</style>
<body>
    <header>
        <button class="menu" onclick="Menu()"><img src="./images/menu.png" alt="" width="40px"></button>
        <ul class="vertical-menu" id="menuvert">
            <li><a href="">Cadastrar Time</a></li>
            <li><a href="">Cadastrar Jogador</a></li>
            <li><a href="">Cadastrar Jogo</a></li>
            <li><a href="../../Login/Pagina_contador/contador.php">Contador</a></li>
            <li><a href="../../index.php" id="logout"><img src="./images/login.png" alt="" width="20px">Sair</a></li>
        </ul>
        <div class="title">
            <h1>JES-2024</h1>
        </div>
        <div class="login"><img src="./images/timbre_sesi_senai.png" alt="" width="300px"></div>
    </header>
    <main>
        <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../../Login/Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>          
        </div>
        <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../../Login/Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div> <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../../Login/Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div> <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../../Login/Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div> <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../../Login/Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div> <div class="timeline-card">
            <div class="timeline-date">
                <H1>HOJE</H1>
                <p>14:00</p>
            </div>
            <div class="timeline-score">
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">2</h1>
                </div>
                <h1>X</h1>
                <div class="timeline-squad">
                    <img src="./images/emblema.png" alt="" width="50px">
                    <h1 id="ponto">0</h1>
                </div>
            </div>
            <div class="timeline-modalidade">
                <p>Esporte-Fem/Masc</p>
            </div>
            <a href="../../Login/Pagina_contador/contador.php">
            <button class="iniciar">Iniciar</button></a>
        </div>
    </main>
</body>
<script>

    function Menu() {
    
        var menu = document.getElementById("menuvert");

        if (menu.style.display === "none") {
            menu.style.display="block";
        }

        else{
            menu.style.display="none";
        }
    }

</script>

</html>
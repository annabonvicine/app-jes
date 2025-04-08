function abrirModal() {
    document.getElementById("overlay").classList.add("ativo");
}

function fecharModal() {
    document.getElementById("overlay").classList.remove("ativo");
}

// Adicionar evento no botão "+"
document.querySelector(".container-jogos button").addEventListener("click", abrirModal);

// Fe
document.getElementById("overlay").addEventListener("click", function (e) {
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
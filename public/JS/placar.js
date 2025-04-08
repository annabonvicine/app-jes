//definir as pontuções iniciais
let pontuacao1 = 0;
let pontuacao2 = 0;

//função acionada quando o botao + for clicado
function adicionarPonto(time) {
    if (time === 1) {//verificação da equipe que pontuou
        pontuacao1++;
        document.getElementById('pontuacao1').innerText = pontuacao1;
        abrirModal();
    } else {
        pontuacao2++;
        document.getElementById('pontuacao2').innerText = pontuacao2;
        abrirModal();
    }
}

//função acionada quando o botao de - for cliacado
function removerPonto(time) {
    if (time === 1 && pontuacao1 > 0) {//verificao da equipe que pontuou e se a pontuação ta maior que 0
        pontuacao1--;
        document.getElementById('pontuacao1').innerText = pontuacao1;
    }
    else if (time === 2 && pontuacao2 > 0) {
        pontuacao2--;
        document.getElementById('pontuacao2').innerText = pontuacao2
    }
}

//função para abrir modal
function abrirModal() {
    document.getElementById("overlay-cronograma").classList.add("ativo");
}

function fecharModal() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="jogadores"]');
    const selecionadas = Array.from(checkboxes).filter(checkbox => checkbox.checked);

    if (selecionadas.length === 1){
        document.getElementById("overlay-cronograma").classList.remove("ativo");
        checkboxes.forEach(cb => cb.checked = false);
    } else if (selecionadas.length > 1){
        alert("Selecione apenas um jogador!");
        checkboxes.forEach(cb => cb.checked = false);
    }
    
}

function ativarMenu(){
    
    let menuAtivado = document.querySelector(".menu")
    let menuIcone = document.querySelector("#menu-button");

    

    if(menuAtivado.classList.contains("ativado")){
        menuAtivado.classList.remove("ativado")
        menuIcone.classList.remove("bi-x-lg")
        menuIcone.classList.add("bi-list")
    }

    else{
        menuAtivado.classList.add("ativado")
        menuIcone.classList.remove("bi-list")
        menuIcone.classList.add("bi-x-lg")
    }
}


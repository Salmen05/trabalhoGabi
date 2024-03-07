var tabela = document.querySelector("#table-bordered");

tabela.addEventListener("click", function(event) {
    var elementoClicado = event.target;
    if elementoClicado.classList.contains("btn-excluir")){
        elementoClicado.remove();
    }
})
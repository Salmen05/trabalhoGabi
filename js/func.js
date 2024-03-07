if (document.getElementById('inEmail')) {
    document.getElementById('inEmail').focus();
}

function fazerLogin() {
    var email = document.getElementById("inEmail").value;
    var senha = document.getElementById("inSenha").value;
    var errorlog = document.getElementById("errorlog");

    if (email === "") {
        errorlog.style.display = "block";
        errorlog.innerHTML =
            " O campo de email está vazio. Por Favor, preencha o email";
        return;
    } else if (senha === "") {
        errorlog.style.display = "block";
        errorlog.innerHTML =
            " O campo da senha está vazio. Por Favor, preencha a senha";
        return;
    } else if (senha.lenght < 8) {
        errorlog.style.display = "block";
        errorlog.innerHTML = "Senha invalida.Minimo de 8 ou mais digitos.";
        return;
    } else {
        errorlog.style.display = "none";
    }
    mostrarProcessando();
    fetch("loginindex.php", {
        method: "Post",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },

        body:
            "email=" + encodeURIComponent(email) + "&senha=" + encodeURIComponent(senha),
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            esconderProcessando();
            if (data.success) {
                errorlog.classList.remove("alert-danger");
                errorlog.classList.add("alert-success");
                errorlog.innerHTML = data.message;
                errorlog.style.display = "block";
                setTimeout(function () {
                    window.location.href = "adm.php";
                }, 2000);

            } else {
                errorlog.classList.remove("alert-success");
                errorlog.classList.add("alert-danger");
                errorlog.innerHTML = data.message;
                errorlog.style.display = "block";
            }

        })
        .catch((error) => {
            console.error("Erro na requisição", error);
        });
}

function esconderProcessando() {
    var divProcessando = document.getElementById("processandoDiv");
    if (divProcessando) {
        document.body.removeChild(divProcessando);
    }
}


function mostrarProcessando() {
    var divProcessando = document.createElement("div");
    divProcessando.id = "processandoDiv";
    divProcessando.style.position = "fixed";
    divProcessando.style.top = "10%";
    divProcessando.style.left = "50%";
    divProcessando.style.transform = "translate(-50%, -50%)";
    divProcessando.innerHTML = '<img src="./img/processando.webp" alt="Processando..."   title="Processando...">';
    document.body.appendChild(divProcessando);
}


function abrirModalEdicao(genero, idgenero) {
    var inGeneroEdit = document.getElementById('generoEdit');
    if (inGeneroEdit) {
        inGeneroEdit.focus();
    }
    inGeneroEdit.value = genero
    document.getElementById('idgeneroEdit').value = idgenero
    $('#generoEditModal').modal('show');
} else {
    modalInstancia.hide();
}


document.getElementById('frmEditGenero').addEventListener('submit', function (event) {
    event.preventDefault();
    alert('clicou no botão');
});

var formData = new FormData(this);
formData.append('controle', 'generoAlt');

fetch('controle.php', {
    method: 'POST',
    body: formData,
})

.then(response => response.json())
.then(data => {
    console.log(data);
    if (data.success)

} else {

})
.catch(error => {
    console.error('Erro na requisição:', error);
    console.error('Response:', error.response);

});


// function carregarConteudo(controle) {

//     fetch('controle.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/x-www-form-urlencoded',
//         },
//         body: "controle=" + encodeURIComponent(controle),
//     })
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById('conteudo').innerHTML = data;
//         })
//         .catch(error => console.error('Erro na requisição:', error))
// }

// function carregarConteudo(controle) {
//     fetch('controle.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/x-www-form-urlencode',
//         },
//         body: 'controle=' + encodeURIComponent(controle),
//     })
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById('show').innerHTML = data;
//         })
//         .catch((error) => {
//             console.error("Erro na requsição", error);
//         });
// }


// const generoModal = document.getElementById('generAddModal');
// const inGenero = document.getElementById('idGenero');

// inGenero.value = '';


// const formGenero = document.getElementById('frmAddGenero');


// generoModal.addEventListener('shown.bs.modal', () => {
//     inGenero.focus();

//     const submitHandler = function (event) {
//         event.preventDefault();

//         brnAddGenero.disable = true;
//         mostrarProcessando();
//     }

//     var form = event.target;
//     var formData = new FormData(form);
//     formData.append('controle', 'generoAdd');

//     fetch('controle.php', {
//         method: 'Post',
//         body: formData,
//     })
//         .then(response => response.json())
//         .then(data => {
//             if (data.success) {

//             } else {

//             }
//         })
//         .catch(error => {
//             console.error('Erro na requisição:', error);

//         })


//     formGenero.addEventListener('submit', submitHandler);

// })
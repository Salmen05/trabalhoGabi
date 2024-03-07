<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADM PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
        }

        .offcanvas {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: navy;
            overflow-x: hidden;
            padding-top: 40px;
        }


        .offcanvas a {
            padding: 16px;
            text-decoration: none;
            font-size: 16px;
            color: lawngreen;
            display: block;
            border-top-left-radius: 17px;
            border-bottom-left-radius: 17px;
            width: 25rem;

        }

        .offcanvas a:hover {
            background-color: white;
            color: navy;
        }

        .offcanvas .submenu {
            display: none;
            padding-left: 30px;
        }

        .offcanvas .submenu a {
            padding: 6px;
        }


        .content {
            margin-left: 250px;
            padding: 15px;
        }

        .linha {
            width: 100%;
            height: 2px;
            background-color: #ffffff;
        }

        .offcanvas p {
            text-align: center;
        }

        .offcanvas button {
            background-color: goldenrod;
        }

        .nav {
            background-color: navy;
            text-align: center;
        }

        .nav button {
            background-color: antiquewhite;
            height: 100%;
            width: 200px;
        }
    </style>


    <nav class="nav">
        <div class="col-2 d-flex justify-content-end">
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg></button>
            <h6 class="text-white">
                PAINEL DE CONTROLE
                <div id="show">

                </div>
            </h6>

            <!-- <div ></div> -->
        </div>

        <div class="col-10 d-flex justify-content-end">
            <button href="sair.php" type="submit" class="btn btn-outline-dark">SAIR</button>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-2">
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h3 class="text-white" class="offcanvas-title" id="offcanvasScrollingLabel">CINESTELLA</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="container mt-4">
                    <div class="linha"></div>
                </div>

                <div class="offcanvas-body mt-1">
                    <p class="text-white">BEM-VINDO(@) A SUA PÁGINA DE ADM!</p>

                    <div class="container">
                        <div class="linha"></div>
                    </div>


                    <a class="mt-4" href="#" onclick="toggleSubmenu('submenu1')">CATEGORIAS</a>
                    <div class="submenu" id="submenu1">
                        <br>


                        <a href="adm.php?page=cliente" class="list-group-item list-group-item-action" onclick="carregarConteudo('listarCliente')" <font face="OCR A Std" color="white">
                            <svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> CLIENTE
                            </font>
                        </a>
                        <br>

                        <a href="adm.php?page=filme" onclick="carregarConteudo('listarFilme')" <font face="OCR A Std" color="white">
                            <svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-tv-fill" viewBox="0 0 16 16">
                                <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5M2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2" />
                            </svg> FILMES
                            </font></a>
                        <br>

                        <a href="adm.php?page=genero" onclick="carregarConteudo('listarGenero')" <font face="OCR A Std" color="white" onclick="carregarConteudo('listarCliente')">
                            <svg style="width: 40px;" xmlns="http://www.w3.org/2000/svg" width="16" height="28" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z" />
                            </svg> GENERO
                            </font></a>
                    </div>

                    <script>
                        function toggleSubmenu(submenuId) {
                            var submenu = document.getElementById(submenuId);
                            if (submenu.style.display === "block") {
                                submenu.style.display = "none";
                            } else {
                                submenu.style.display = "block";
                            }
                        }
                    </script>
                </div>
            </div>

            <div class="container" style="margin-left:210%;">
                <div class="col-md-10">
                    <?php
                    if (isset($_GET['page']) and !empty($_GET['page'])) {
                        $page = $_GET['page'];
                        if ($page == 'cliente') {
                            include_once 'cliente.php';
                        } else if ($page == 'filme') {
                            include_once 'filme.php';
                        } else if ($page == 'genero') {
                            include_once 'genero.php';
                        }
                    };
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    
    <script src="./js/func.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
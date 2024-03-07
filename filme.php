<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');
?>

<div class="container">
    <h2 class="mt-3">FILME</h2>

    <style>
        .container {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .table {
            height: 4rem;
            width: 47rem;
            text-align: center;
            font-size: larger;
            border-color: #1e0552;
        }
    </style>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>

                <th scope="col" class="text-center">CÓDIGO</th>
                <th scope="col" class="text-center">NOME</th>
                <th scope="col" class="text-center">AÇÃO</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $conn = conectar();
            $returnfilme =  listarTabela('idfilme, nome', 'filme');
            if ($returnfilme != 'Vazio') {
                foreach ($returnfilme as $filme) {
                    $idfilme = $filme->idfilme;
                    $nome = $filme->nome;
            ?>
                    <tr>
                        <th scope="row"><?php echo $idfilme ?></th>
                        <td><?php echo $nome ?></td>
                        <a class="link-opacity-10" href=""></a>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalvermais">
                                    <button type="button" class="btn btn-primary">VER MAIS</button>
                                </a>

                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalalterar">
                                    <button type="button" class="btn btn-warning">ALTERAR</button>
                                </a>

                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalexcluir">
                                    <button type="button" class="btn btn-danger">EXCLUIR</button>
                                </a>
                            </div>
                        </td>
                    </tr>
            <?php
                }
            };
            ?>
        </tbody>
    </table>
</div>  
<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');
?>

<div class="container">
    <h2 class="mt-3">CLIENTE</h2>

    <style>
        .container {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .table {
            height: 4rem;
            width: 47rem;
            text-align: center;
            font-size: larger;
            border-color: #00f7ff;
        }
    </style>

    <a class="btn btn-warning" data-bs-target="#cadastrar" data-bs-toggle="modal">Cadastrar</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">CÓDIGO</th>
                <th scope="col" class="text-center">NOME</th>
                <th scope="col" class="text-center">CONTATO</th>
                <th scope="col" class="text-center">AÇÃO</th>

            </tr>
        </thead>
        <tbody>

            <?php
            $conn = conectar();
            $returncliente =  listarTabela('idcliente, nome, contato', 'cliente');
            if ($returncliente != 'Vazio') {
                foreach ($returncliente as $cliente) {
                    $idcliente = $cliente->idcliente;
                    $nome = $cliente->nome;
                    $contato = $cliente->contato;
            ?>
                    <tr>
                        <th scope="row"><?php echo $idcliente ?></th>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $contato ?></td>
                        <a class="link-opacity-14" href=""></a>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                                <a data-bs-toggle="modal" class="btn btn-secondary" data-bs-target="#vermais<?php echo ($idcliente) ?>">
                                    Ver Mais
                                </a>


                                <a data-bs-toggle="modal" class="btn btn-primary" data-bs-target="#alterar<?php echo ($idcliente) ?>">
                                    Alterar
                                </a>

                                <a data-bs-toggle="modal" class="btn btn-danger" data-bs-target="#delete<?php echo $idcliente ?>">
                                    Excluir
                                </a>

                            </div>
                        </td>
                    </tr>


                    <div class="modal fade" id="delete<?php echo $idcliente ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a>
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">EXCLUIR</h1>
                                    </a>
                                </div>
                                <div class="modal-body">

                                </div>
                                <h6 class="text-center" class="text-center">DESEJA REALMENTE APAGAR
                                    ESSA INFORMAÇÃO ?</h6>
                                <div class="modal-footer">
                                    <a href="delete.php?idcliente=<?php echo ($idcliente) ?>" class="btn btn-danger">CONFIRMAR</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="alterar<?php echo $idcliente ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a>
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">ALTERAR</h1>
                                    </a>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="nome" class="form-label">nome</label>
                                            <input class="form-control" id="nome" aria-describedby="emailHelp">
                                            <div id="nome" class="form-text"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">contato</label>
                                            <input class="form-control" id="contato">
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="alterar.php?idcliente=<?php echo ($idcliente) ?>" class="btn btn-danger">Alterar</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            };
            ?>
        </tbody>
    </table>
</div>

<form method="POST" action="registro.php">
    <div class="modal fade" id="cadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleInputnome1" class="form-label">nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputcontato1" class="form-label">contato</label>
                        <input type="text" class="form-control" id="contato" name="contato">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">SALVAR</button>
                </div>
            </div>
        </div>
    </div>
</form>



<div class="modal fade" id="vermais" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">VER MAIS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>"Seja bem-vindo à nossa locadora de filmes, o seu refúgio cinematográfico!
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
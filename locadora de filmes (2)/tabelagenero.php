<div class="card">
    <h5 class="card-header">CLIENTE</h5>
    <div class="card-body">
        <div class="container">
            <h2></h2>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col-1">#CODIGO</th>
                        <th scope="col-1">NOME</th>
                        <th scope="col-1">ALTERAÇÃO</th>
                        <th scope="col-1">ATIVO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $listarGenero = listarTabela('idgenero, nome, alteracao, ativo', 'genero', 'idgenero');
                    if ($listarGenero != 'Vazio') {
                        foreach ($listarGenero as $genero) {
                            $idgenero = $genero->idgenero;
                            $nome = $genero->nome;
                            $alteracao = $genero->alteracao;

                    ?>
                            <tr>
                                <th scope="row"><?php echo  $idgenero ?></th>
                                <td><?php echo  $nome ?></td>
                                <td><?php echo  $alteracao ?></td>
                                <td><?php echo  $ativo ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
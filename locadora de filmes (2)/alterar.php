<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');

if (isset($_GET['idgenero'])) {
    $idgenero = $_GET['idgenero'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Aqui você pode processar o formulário de alteração
        // Por exemplo, pegar os dados do formulário e atualizar o registro no banco de dados
        $nome = $_POST['nome']; // Supondo que o campo de alteração seja o nome

        $conn = conectar();
        $update = $conn->prepare('UPDATE genero SET nome = :nome WHERE idgenero = :idgenero');
        $update->bindValue(':nome', $nome, PDO::PARAM_STR);
        $update->bindValue(':idgenero', $idgenero, PDO::PARAM_INT);
        $conn->beginTransaction();
        $update->execute();
        $conn->commit();

        header("Location: adm.php?page=genero");
    }
}
        ?>
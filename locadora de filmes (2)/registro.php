<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');
$conn=conectar();

if (isset($_POST["contato"])) {
    $nome=$_POST["nome"];
    $contato=$_POST['contato'];
    $registro = $conn->prepare('INSERT INTO cliente(nome, contato) VALUES(:nome, :contato)');
    $registro->bindValue(':nome', $nome, PDO::PARAM_STR);
    $registro->bindValue(':contato', $contato, PDO::PARAM_STR);
    $conn->beginTransaction();
    $registro->execute();
    $conn->commit();
    header("Location: adm.php?page=cliente");
}


?>
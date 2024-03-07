<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');
$conn=conectar();

if (isset($_POST["nome"])) {
    $nome=$_POST["nome"];
    $registro = $conn->prepare('INSERT INTO genero(nome) VALUES(:nome)');
    $registro->bindValue(':nome', $nome, PDO::PARAM_STR);
    $conn->beginTransaction();
    $registro->execute();
    $conn->commit();
    header("Location: adm.php?page=genero");
}


?>
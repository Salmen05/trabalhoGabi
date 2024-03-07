<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');
$conn = conectar();
if (isset($_GET['idcliente'])) {
  $idcliente = $_GET['idcliente'];
  $nome = $_POST['nome'];
  $contato = $_POST['contato'];
  $update = $conn->prepare('UPDATE cliente SET nome = :nome, contato = :contato WHERE idcliente = :idcliente');
  $update->bindValue(':nome', $nome, PDO::PARAM_STR);
  $update->bindValue(':contato', $contato, PDO::PARAM_STR);
  $update->bindValue(':idcliente', $idcliente, PDO::PARAM_INT);
  $conn->beginTransaction();
  $update->execute();
  $conn->commit();
  header("Location: adm.php?page=cliente");
}
if (isset($_GET['idgenero'])) {
  $idgenero = $_GET['idgenero'];
  $nome = $_POST['nome'];
  $update = $conn->prepare('UPDATE genero SET nome = :nome WHERE idgenero = :idgenero');
  $update->bindValue(':nome', $nome, PDO::PARAM_STR);
  $update->bindValue(':idgenero', $idgenero, PDO::PARAM_INT);
  $conn->beginTransaction();
  $update->execute();
  $conn->commit();
  header("Location: adm.php?page=genero");
}


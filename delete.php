<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');
if (isset($_GET['idcliente'])) {
  echo $_GET['idcliente'];
  $idcliente = $_GET['idcliente'];
  $conn = conectar();
  $delete = $conn->prepare('DELETE FROM cliente WHERE idcliente = :idcliente');
  $delete->bindValue('idcliente', $idcliente, PDO::PARAM_INT);
  $conn->beginTransaction();
  $delete->execute();
  $conn->commit();
  header("Location: adm.php?page=cliente");
}

<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');
if (isset($_GET['idgenero'])) {
    echo $_GET['idgenero'];
    $idgenero = $_GET['idgenero'];
    $conn = conectar();
    $delete = $conn->prepare('DELETE FROM genero WHERE idgenero = :idgenero');
    $delete->bindValue('idgenero', $idgenero, PDO::PARAM_INT);
    $conn->beginTransaction();
    $delete->execute();
    $conn->commit();
    header("Location: adm.php?page=genero.php");
}

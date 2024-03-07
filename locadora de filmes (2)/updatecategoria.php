<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/dashboard.php');
$conn = conectar();

if (isset($_POST['idcliente'])) {
    $update =$conn->prepare('UPDATE cliente SET nome =:nome, contato =:contato');
    
}
?>
<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/dashboard.php');
$conn = conectar();

if (isset($_POST['idgenero'])) {
    $update =$conn->prepare('UPDATE genero SET nome =:nome');
    
}
?>
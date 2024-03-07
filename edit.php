<?php

if(isset($_POST['submit']))
{
    include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];

$result = mysqli_query($conexao, "INSERT INTO cliente(nome,contato)
VALUES ('$nome','$email')");

header('location: cliente.php');

}

?>
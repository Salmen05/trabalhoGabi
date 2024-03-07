<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');

$conn = conectar();
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$email = $dados['email'];
$senha = $dados['senha'];

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANIRIZE_STRING);
$acao = filter_input(INPUT_POST, 'acaoid', FILTER_SANIRIZE_INT);
$acao = filter_input(INPUT_POST, 'controle', FILTER_SANIRIZE_STRING);
$acao = filter_input(INPUT_POST, 'controleGet', FILTER_SANIRIZE_STRING);

switch ($acao) {
}

switch ($controle) {
    case 'listaCliente':
        include_once 'cliente.php';
        break;
    case 'listarGenero':
   
        include_once 'genero.php';
        break;
    
    case 'listaFilme':
        include_once 'filme.php';
        break;
    case 'listarGenero':
}


switch ($controle) {
    case 'listarGenero':
        echo 'Voce clicou no botão listar Genero';
        break;
    case 'listarCliente':
        echo 'Voce clicou no botão listar Cliente';
        break;
    case 'listarFilme':
        echo 'Voce clicou no botão listar Filme';
        break;

generoAdd.php

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

echo json_encode($Dados);


}


?>


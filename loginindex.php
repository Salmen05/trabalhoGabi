<?php
session_start();

include_once "config/conexao.php";
include_once "config/constantes.php";
include_once "func/funcoes.php";

$conn = conectar();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$email = $dados['email'];
$senha = $dados['senha'];



$BancodeDados = validarSenhaCriptografia('idadm, nome, email, senha, ativo', 'adm', 'email', 'senha', $email, $senha, 'ativo', 'A');


if ($BancodeDados) {
    if ($BancodeDados == 'usuario') {
        echo json_encode(['success' => false, 'message' => 'Usuário inválidos!']);
    } else if ($BancodeDados == 'senha') {
        echo json_encode(['success' => false, 'message' => 'Senha inválida!']);
    } else {

        $_SESSION['idadm'] = $BancodeDados->idadm;
        $_SESSION['nome'] = $BancodeDados->nome;
        $_SESSION['email'] = $BancodeDados->email;
        echo json_encode(['success' => true, 'message' => 'Login efetuado com Sucesso!']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Erro no banco de dados']);
}

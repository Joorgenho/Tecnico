<?php

include_once 'model/clsCliente.php';
include_once 'dao/clsClienteDAO.php';
include_once 'dao/clsConexao.php';


$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];
//$senha = md5($senha);

$cliente = ClienteDAO::logar($login, $senha);

if ($cliente == NULL) {
   header('Location: inicial.php?erro=Erro de login'); 
} else{
session_start();
$_SESSION['logado'] = true;
$_SESSION['idCliente'] = $cliente->getId();
$id = $cliente->getId();
$_SESSION['nome'] = $cliente->getNome();



header('Location: parteUsuario.php?msg=Usuário logado com sucesso!'); 

//header("Location: ".$_SERVER['HTTP_REFERER']);
}

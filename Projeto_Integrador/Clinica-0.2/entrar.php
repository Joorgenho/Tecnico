<?php

include_once 'model/clsCliente.php';
include_once 'dao/clsClienteDAO.php';
include_once 'dao/clsConexao.php';


$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];
//$senha = md5($senha);

$cliente = ClienteDAO::logar($login, $senha);

if ($cliente == NULL) {
    echo '<body onload="window.history.back()" >';
}
session_start();
$_SESSION['logado'] = true;
$_SESSION['idCliente'] = $cliente->getId();
$_SESSION['nome'] = $cliente->getNome();
$_SESSION['foto'] = $cliente->getFoto();

if ($cliente->getAcesso() > 0) {    
header('Location: frmMedico.php'); 

} else {

header('Location: parteUsuario.php'); 

//header("Location: ".$_SERVER['HTTP_REFERER']);
}

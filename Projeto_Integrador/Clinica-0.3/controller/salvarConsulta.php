<?php
include_once '../model/clsConsulta.php';
include_once '../dao/clsConsultaDAO.php';
include_once '../dao/clsConexao.php';

if( isset($_REQUEST['inserir'])  ){
    
        $consulta = new Consulta();
        $consulta->setNome( $_POST['txtNome'] );
        $consulta->setTelefone( $_POST['txtTelefone'] );
        $consulta->setEmail( $_POST['txtEmail'] );
        $consulta->setCpf( $_POST['txtCPF'] );
        $consulta->setNomeM( $_POST['txtNomeM'] );
        $consulta->setDia( $_POST['txtDia'] );
        $consulta->setHorario( $_POST['txtHorario'] );
        
        
        ConsultaDAO::inserir( $consulta );
        
        //header("Location: ../novaConsulta.php");
       
}



if( isset($_REQUEST['editar'])){
    
    $id = $_REQUEST['idConsulta'];
    $consulta = ConsultaDAO::getConsultaById($id);
}
    
    
    $consulta->setNome( $_POST['txtNome'] );
    $consulta->setTelefone( $_POST['txtTelefone'] );
    $consulta->setEmail( $_POST['txtEmail'] );
    $consulta->setCpf( $_POST['txtCPF'] );
    $consulta->setNomeM( $_POST['txtNomeM'] );
    $consulta->setDia( $_POST['txtDia'] );
    $consulta->setHorario( $_POST['txtHorario'] );
     
           
    
    
    ConsultaDAO::editar($consulta);
    
    header("Location: ../novaConsulta.php");


if( isset($_REQUEST['excluir'])){
    $id = $_REQUEST['idCOnsulta'];
    $consulta = ConsultaDAO::getConsultaById($id);
    echo '<br><br><hr> '
       . '<h3>Confirma a exclusão da consulta  '
       .$cliente->getNome(). '? </h3> '
       . '<br><hr>';
    echo  '<a href="?confirmaExcluir&idCconsulta='.$id.'">'
        . '    <button>SIM</button></a> ';
    echo '<a href="../novaConsulta.php" ><button>NÃO</button></a>';
}

if( isset( $_REQUEST['confirmaExcluir'] ) ){
    $id = $_REQUEST['idCConsulta'];
    $consulta = ConsultaDAO::getConsultaById($id);
    
    ConsultaDAO::excluir($consulta);
    header("Location: ../consulta.php");
}


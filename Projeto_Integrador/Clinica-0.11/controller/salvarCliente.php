<?php
include_once '../model/clsCliente.php';
include_once '../dao/clsClienteDAO.php';
include_once '../dao/clsConexao.php';



if( isset($_REQUEST['inserir'])  ){
    $senha = $_POST['txtSenha'];
    $senhaConfirma = $_POST['txtSenhaConfirma'];
    
    if( $senha != $senhaConfirma ){
        echo "<body onload='window.history.back();'>";
    }else{
    
        $cliente = new Cliente();
        $cliente->setNome( $_POST['txtNome'] );
        $cliente->setTelefone( $_POST['txtTelefone'] );
        $cliente->setEmail( $_POST['txtEmail'] );
        $cliente->setEmailconf( $_POST['txtEmailConfirma'] );
        $cliente->setCpf( $_POST['txtCPF'] );      
        $cliente->setCidade( $_POST['txtCidade'] );        
        $cliente->setSexo( $_POST['rbSexo']);
        $senha = md5($senha);
        $cliente->setSenha( $senha );
        
        
      
        
       
       
        ClienteDAO::inserir( $cliente );
        
        header("Location: ../clientes.php");
    }   
}



if( isset($_REQUEST['editar'])){
   
    $id = $_REQUEST['idCliente'];
    $cliente = ClienteDAO::getClienteById($id);
    
     
    
    $cliente->setNome( $_POST['txtNome'] );
    $cliente->setTelefone( $_POST['txtTelefone'] );
    $cliente->setEmail( $_POST['txtEmail'] );
    $cliente->setEmailConf( $_POST['txtEmailConfirma'] );
    $cliente->setCpf( $_POST['txtCPF'] );        
    $cliente->setSexo( $_POST['rbSexo']);  
    $cliente->setCidade($_POST['nomeCid'] );
    
    ClienteDAO::editar($cliente);
    
    header("Location: ../parteUsuario.php");
    
}


function salvarFoto(){
    $nome_arquivo = "";
    if( isset( $_FILES['foto']['name']) && 
            $_FILES['foto']['name'] != "" ){
        $nome_arquivo = date('YmdHis').
              basename( $_FILES['foto']['name'] );
        $diretorio = "../fotos_clientes/";
        $caminho = $diretorio.$nome_arquivo;
        if( ! move_uploaded_file( $_FILES['foto']['tmp_name'] ,
                $caminho ) ){
            $nome_arquivo = "sem_foto.png";
        }
        
    } else {
        $nome_arquivo = "sem_foto.png";
    }
    return $nome_arquivo;
}


if( isset($_REQUEST['excluir'])){
    $id = $_REQUEST['idCliente'];
    $cliente = ClienteDAO::getClienteById($id);
    echo '<br><br><hr> '
       . '<h3>Confirma a exclus??o do cliente  '
       .$cliente->getNome(). '? </h3> '
       . '<br><hr>';
    echo  '<a href="?confirmaExcluir&idCliente='.$id.'">'
        . '    <button>SIM</button></a> ';
    echo '<a href="../clientes.php" ><button>N??O</button></a>';
}

if( isset( $_REQUEST['confirmaExcluir'] ) ){
    $id = $_REQUEST['idCliente'];
    $cliente = ClienteDAO::getClienteById($id);
    if( $cliente->getFoto() != "" &&  
        $cliente->getFoto() != "sem_foto.png" ){
        unlink("../fotos_clientes/".$cliente->getFoto() );
    }
    ClienteDAO::excluir($cliente);
    header("Location: ../index.php");
}


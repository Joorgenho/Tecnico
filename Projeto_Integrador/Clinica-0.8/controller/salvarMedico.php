<?php
include_once '../model/clsMedico.php';
include_once '../dao/clsMedicoDAO.php';
include_once '../dao/clsConexao.php';


if( isset($_REQUEST['inserir'])  ){
    
       
        $medico = new Medico();        
        $medico->setNome( $_POST['txtNome'] );
        $medico->setEspecialidade( $_POST['txtEspecialidade'] );
        $medico->setFoto( salvarFoto() );
        
        MedicoDAO::inserir( $medico );
        
        header("Location: ../frmMedico.php");
      
        
}

if( isset($_REQUEST['editar'])){
    
    $id = $_REQUEST['idMedico'];
    $medico = MedicoDAO::getMedicoById($id);
    
     if( isset( $_FILES['foto']['name']) && 
            $_FILES['foto']['name'] != "" ){
         $nova_foto = salvarFoto();
         if( $medico->getFoto() != "sem_foto.png"){
             unlink("../fotos_medico/".$medico->getFoto());
         }
         $medico->setFoto($nova_foto);
     }
    
    $medico->setNome( $_POST['txtNome'] );
        
    $especialidade = new Especialidade();
    $especialidade->setId( $_POST['especialidade']);
    $medico->setEspecialidade( $especialidade ); 
    
    MedicoDAO::editar($medico);
    
    header("Location: ../frmMedico.php");
    
}

function salvarFoto(){
    $nome_arquivo = "";
    if( isset( $_FILES['foto']['name']) && 
            $_FILES['foto']['name'] != "" ){
        $nome_arquivo = date('YmdHis').
              basename( $_FILES['foto']['name'] );
        $diretorio = "../fotos_medicos/";
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
    $id = $_REQUEST['idMedico'];
    $medico = ProdutoDAO::getMedicoById($id);
    echo '<br><br><hr> '
       . '<h3>Confirma a exclusão do Medico  '
       .$medico->getNome(). '? </h3> '
       . '<br><hr>';
    echo  '<a href="?confirmaExcluir&idMedico='.$id.'">'
        . '    <button>SIM</button></a> ';
    echo '<a href="../medico.php" ><button>NÃO</button></a>';
}

if( isset( $_REQUEST['confirmaExcluir'] ) ){
    $id = $_REQUEST['idMedico'];
    $medico = MedicoDAO::getMedicoById($id);
    if( $medico->getFoto() != "" &&  
        $medico->getFoto() != "sem_foto.png" ){
        unlink("../fotos_medico/".$medico->getFoto() );
    }
    ProdutoDAO::excluir($medico);
    header("Location: ../frmMedico.php");
}


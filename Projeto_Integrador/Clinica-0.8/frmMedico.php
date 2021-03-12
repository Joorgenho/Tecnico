<?php
    
    include_once 'model/clsMedico.php';    
    include_once 'dao/clsMedicoDAO.php';
    include_once 'dao/clsConexao.php';
    
    session_start();
    
    $nome = "";
    $especialidade = "";
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idMedico'];
        $medico = MedicoDAO::getMedicoById($id);
        $nome = $medico->getNome();          
        $foto = $medico->getFoto();        
        $action = "editar&idMedico=".$medico->getId();
    }  
?>

<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
    <?php
        echo '<a href="sair.php"><button>Sair</button></a>';
        ?>
        <title>Cadastrar Médico</title>
        
    </head>
    <body>
        
        
         <h1 align="center">Cadastrar Médico</h1>
        
        <br><br><br>
        
        <form action="controller/salvarMedico.php?inserir=true" method="POST" 
              enctype="multipart/form-data">
            
            <label>Nome: </label>
            <input type="text" name="txtNome" value="<?php echo $nome; ?>" required maxlength="100" /> <br><br>
            <label>Especialidade: </label>
            <input type="text" name="txtEspecialidade" value="<?php echo $especialidade; ?>" maxlength="30" /> <br><br>
                            
          
            
            <br><br>
            <label>Foto: </label>
            
            <?php 
                if( isset($_REQUEST['editar'])){
                    echo '<img src="fotos_medico/'.$foto.'" width="30px" />';
                }
            ?>
            
            <input type="file" name="foto" /> <br><br>
            <?php 
                
            ?>
            
            
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
               
        </form>   
    </body>


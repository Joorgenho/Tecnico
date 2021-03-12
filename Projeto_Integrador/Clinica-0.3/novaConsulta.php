<?php
    include_once 'model/clsMedico.php';
    include_once 'model/clsConsulta.php';
    include_once 'dao/clsConsultaDAO.php';
    include_once 'dao/clsMedicoDAO.php';
    include_once 'dao/clsConexao.php';
    
    session_start();
    
    $nome = "";
    $cpf = "";
    $telefone = "";
    $email = "";   
    $nomeM = "";
    $dia = "";
    $horario = "";
   
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idConsulta'];
        $consulta = ConsultaDAO::getConsultaById($id);
        $nome = $consulta->getNome();
        $cpf = $consulta->getCpf();
        $telefone = $consulta->getTelefone();
        $email = $consulta->getEmail();
        $nomeM = $consulta->getNome();
        $dia = $consulta->getDia();
        $horario = $consulta->getHorario();
        
        $action = "editar&idConsulta=".$consulta->getId();
    }
    $lista = MedicoDAO::getMedico();
?>

<!DOCTYPE html>
<html>
    <head>
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <meta charset="UTF-8">
        <?php
        echo '<a href="sair.php"><button>Sair</button></a>';
         echo '<a href="parteUsuario.php"><button>Voltar</button></a>';
        ?>
        <title>Cadastrar Consulta</title>
    </head>
    <body>
        
         <h1 align="center">Cadastrar Consulta</h1>
        
        <br><br>
        
        <form action="controller/salvarConsulta.php?inserir=true" method="POST"
              enctype="multipart/form-data" >
            
                       
            <label>Nome: </label>
            <input type="text" name="txtNome" value="<?php echo $nome; ?>" required maxlength="100" /> <br>
            
            <label>CPF: </label>
            <input type="number" name="txtCPF" value="<?php echo $cpf; ?>" required maxlength="30" /> <br>
            
            <label>Telefone: </label>
            <input type="number" name="txtTelefone" value="<?php echo $telefone; ?>" required /> <br>
            
            <label>Email: </label>
            <input type="email" name="txtEmail" value="<?php echo $email; ?>" required /> <br>
            
            <label>Especialidade do médico: </label>
            <select name="nome" >
                <option value="0"  >Selecione...</option>
                <?php
                    
                    foreach ($lista as $med){                
                        echo '<option value="'.$med.'" >'.$med.'</option>';
                    }
                ?>
                
            </select>
            <br><br><br>
            
            <label>Data: </label>
            <input type="date" name="txtDia" value="<?php echo $dia; ?>" required /> <br>
            
            <label>Horário: </label>
            <input type="datetime" name="txtHorario" value="<?php echo $horario; ?>" required /> <br>
         
            <?php 
                
            ?>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
        </form>
         
        
    </body>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>

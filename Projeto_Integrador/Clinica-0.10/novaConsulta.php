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
        
        <meta charset="UTF-8">
		<link href="css/styleconsulta.css" rel="stylesheet"
		type="text/css" />

        <title>Cadastrar Consulta</title>
    </head>
    <body>
		 <body style="background-image:url(imagem/consulta.jpg)" >
		<div id="container">
       
          <section id="topo">
				<h1>Cadastrar Consulta</h1>
				
			</section>
			
			
        <form action="controller/salvarConsulta.php?inserir=true" method="POST"
              enctype="multipart/form-data" >
             <br><br>
             <div class="cadastro">          
            <label>Nome: </label>
            <input type="text" name="txtNome" class="form" value="<?php echo $nome; ?>" required maxlength="100" /> <br>
            
            <label>CPF: </label>
            <input type="text" name="txtCPF" class="form" value="<?php echo $cpf; ?>" required maxlength="30" /> <br>
            
            <label>Telefone: </label>
            <input type="text" name="txtTelefone" class="form" value="<?php echo $telefone; ?>" required /> <br>
            
            <label>Email: </label>
            <input type="email" name="txtEmail" class="form" value="<?php echo $email; ?>" required /> <br>
            
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
			<br><br><br>
			<br><br>
			<a href="index.php">
				<button class="sair">Sair</button>	
			 </a>
            <input type="submit" class="botaosalvar" value="Salvar" />
            <input type="reset" class="botaolimpar" value="Limpar" />
           	 <a href="parteUsuario.php">
			<button class="voltar">Voltar</button>


		
        </form>
        </div> 
        
    </body>
     
</html>

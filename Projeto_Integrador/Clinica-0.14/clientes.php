<?php
    include_once 'model/clsCliente.php';
    include_once 'dao/clsClienteDAO.php';
    include_once 'dao/clsConexao.php';
    
    session_start();
    
    $nome = "";
    $telefone = "";
    $email = "";
    $emailconf = "";
    $cpf = "";
    $sexo = "";
    $nomeCid = ""; 
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idCliente'];
        $cliente = ClienteDAO::getClienteById($id);
        $nome = $cliente->getNome();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();
        $emailconf = $cliente->getEmailConf();
        $cpf = $cliente->getCpf();
        $sexo = $cliente->getSexo();
        $nomeCid = $cliente->getCidade();
        $action = "editar&idCliente=".$cliente->getId();
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       	<link href="css/stylecadastrar.css" rel="stylesheet"
		type="text/css" />
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/validaemail.js"></script>
		<script src="js/validasenha.js"></script>
		
        <title>Market N171 - Cadastrar Cliente</title>

    </head>
    <body style="background-image:url(imagem/familia.jpg)" >
		<div id="container">
		
        <section id="topo">
				<h1>Cadastrar Clientes</h1>
			</section>
        
        <form action="controller/salvarCliente.php?inserir=true" method="POST" 
              enctype="multipart/form-data">
            <div class="cadastro">
                       
            <label>Nome: </label>
            <input type="text" name="txtNome" class="form" id="nomeCadastro" value="<?php echo $nome; ?>" required maxlength="100" /> <br>
            <label>Telefone: </label>
            <input type="text" name="txtTelefone" class="form" id="telefoneCadastro" value="<?php echo $telefone; ?>" maxlength="30" /> <br>
            <label>E-mail: </label>
            <input type="email" name="txtEmail" id="txtEmail" class="form" value="<?php echo $email; ?>" required /> <br>
			<label>Confirme seu e-mail: </label>
            <input type="email" name="txtEmailConfirma" id="txtEmailConfirma" class="form" value="<?php echo $emailconf; ?>" required /> <br>
            
			<div id="msgemail"></div>
			
			
			
            <label>CPF: </label>
            <input type="text" name="txtCPF" class="form" id="cpfCadastro" value="<?php echo $cpf; ?>" required /> <br>
            
            <label>Cidade: </label>
            <input type="text" name="txtCidade" class="form" id="cidadeCadastro" value="<?php echo $nomeCid; ?>" required /> <br>
                                         
            
            
            <br>
            <?php 
                $feminino = "";
                $masculino = "";
                if( $sexo == "f"){
                    $feminino = " checked ";
                }
                if( $sexo == "m"){
                    $masculino = " checked ";
                }
            ?>
            
            <label>Sexo: </label>
            <label><input type="radio" name="rbSexo" <?php echo $feminino; ?> value="f" required /> Feminino</label> 
            <label><input type="radio" name="rbSexo" id="masculinoCadastro" <?php echo $masculino; ?> value="m" /> Masculino</label> <br><br>
            
                                        
            
           
                    <label>Senha: </label>
                    <input type="password" name="txtSenha" id="txtSenha" class="form" required maxlength="100"  /> <br><br>
                    <label>Confirme sua Senha: </label>
                    <input type="password" name="txtSenhaConfirma" id="txtSenhaConfirma" class="form" required maxlength="100" /> <br>
                    <br><br>
                    
           
			
            <input type="submit" class= "salvar" id="salvarCadastro" value="Salvar" />
            <input type="reset" class= "limpar" value="Limpar" />
			  </form>  
			
			
             
        <a href='inicial.php'><input type="button" class='sair' value="Voltar"></a>
	
        
        </div>  
			
            
        
    </body>
</html>

<?php
    include_once 'model/clsCliente.php';
    include_once 'dao/clsClienteDAO.php';
    include_once 'dao/clsConexao.php';
    
    session_start();
    
    $nome = "";
    $telefone = "";
    $email = "";
    $cpf = "";
    $sexo = "";
    $nomeCid = "";
    $foto = "sem_foto.png";
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idCliente'];
        $cliente = ClienteDAO::getClienteById($id);
        $nome = $cliente->getNome();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();
        $cpf = $cliente->getCpf();
        $sexo = $cliente->getSexo();
        $filhos = $cliente->getFilhos();
        $foto = $cliente->getFoto();
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
            <input type="text" name="txtNome" class="form" value="<?php echo $nome; ?>" required maxlength="100" /> <br>
            <label>Telefone: </label>
            <input type="text" name="txtTelefone" class="form" value="<?php echo $telefone; ?>" maxlength="30" /> <br>
            <label>E-mail: </label>
            <input type="email" name="txtEmail" class="form" value="<?php echo $email; ?>" required /> <br>
			<label>Confirme seu e-mail: </label>
            <input type="email" name="txtEmailConfirma" class="form" value="<?php echo $email; ?>" required /> <br>
            
            <label>CPF: </label>
            <input type="text" name="txtCPF" class="form" value="<?php echo $cpf; ?>" required /> <br>
            
            <label>Cidade: </label>
            <input type="text" name="txtCidade" class="form" value="<?php echo $nomeCid; ?>" required /> <br>
                                         
            
            
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
            <label><input type="radio" name="rbSexo" <?php echo $masculino; ?> value="m" /> Masculino</label> <br><br>
            
                                        
            
            <?php
                if( !isset( $_REQUEST['editar'] )){
            ?>
                    <label>Senha: </label>
                    <input type="password" name="txtSenha" class="form" required maxlength="100"  /> <br><br>
                    <label>Confirme sua Senha: </label>
                    <input type="password" name="txtSenhaConfirma" class="form" required maxlength="100" /> <br>
                    <br><br>
                    
            <?php 
                } 
				
            ?>
			
            <input type="submit" class= "salvar" value="Salvar" />
            <input type="reset" class= "limpar" value="Limpar" />
			
			
			
             <?php
        echo "<a href='sair.php'><button class='sair'>Sair</button></a>";
	
        ?>
        </div>  
			
        </form>     
        
    </body>
</html>

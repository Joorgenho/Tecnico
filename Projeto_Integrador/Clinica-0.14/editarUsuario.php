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
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idCliente'];
        $clienteEditar = ClienteDAO::getClienteById($id);
        $nome = $clienteEditar->getNome();
        $telefone = $clienteEditar->getTelefone();
        $email = $clienteEditar->getEmail();
        $cpf = $clienteEditar->getCpf();
        $sexo = $clienteEditar->getSexo();
        $filhos = $clienteEditar->getFilhos();
        $nomeCid = $clienteEditar->getCidade();
        $action = "editar&idCliente=".$cliente->getId();
    }
    
?>
<html>
    <head>
        <meta charset="UTF-8">
		<link href="css/styleeditarUsuario.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/validaemail.js"></script>
		<script src="js/validasenha.js"></script>
    <br><br>

</head>
    <body style="background-image:url(imagem/editarusuario.jpg)" >
		<div id="container">
		
			<section id="topo">
		
    <h1>Edite suas informações!</h1>
	
	</section>


    <?php
    if (isset($_POST['cpf'])) {
        $cpf = $_POST['cpf'];
        $sql = " SELECT id, nome, cpf, telefone, email, nomeCid, sexo, senha, acesso FROM clientes where cpf = " . $cpf . " ";
        $resultado = ClienteDAO::getClientes($sql);
        
    ?>     
	
    <form action="controller/salvarCliente.php?editar=true" method="POST" >
	<div class="cadastro">
			
			<?php
			
			  echo '<div class="form-group"> ';
			  echo '<div class="banco">Nome: '. $resultado[0]->getNome() . '</div>';
			  echo '<div class="banco">CPF: '. $resultado[0]->getCpf() . '</div>';
        
			  echo '  </div> ';        
    }
			
			?>
			
			
					
			<label>Telefone: </label>
            <input type="text" name="txtTelefone" class="form" id="telefone" value="<?php echo $telefone; ?>" maxlength="30" /> <br>
            <label>Email: </label>
            <input type="text" name="txtEmail" id="txtEmail" class="form" value="<?php echo $email; ?>" maxlength="30" /> <br>
			<label>Confirme seu e-mail: </label>
            <input type="email" name="txtEmailConfirma" id="txtEmailConfirma" class="form" value="<?php echo $email; ?>" required /> <br>
            <label>Cidade: </label>
            <input type="text" name="nomeCid" class="form" id="cidade" value="<?php echo $nomeCid; ?>" maxlength="30" /> <br>
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
            <input type="radio" name="rbSexo" <?php echo $feminino; ?> class ="form" value="f" required /> Feminino 
            <input type="radio" name="rbSexo" id="masculino" <?php echo $masculino; ?> class="form" value="m" /> Masculino <br><br>
            <input type="hidden" name="idCliente" value=<?php echo $resultado[0]->getId(); ?> />
            <input type="hidden" name="txtNome" value=<?php echo $resultado[0]->getNome(); ?> />
            <input type="hidden" name="txtCPF" value=<?php echo $resultado[0]->getCpf(); ?> />
			
			
            <?php
                if( !isset( $_REQUEST['editar'] )){
            ?>
                    <label>Senha: </label>
                    <input type="password" name="txtSenha" id="txtSenha" class="form" required maxlength="100"  /> <br><br>
                    <label>Confirme sua Senha: </label>
                    <input type="password" name="txtSenhaConfirma" id="txtSenhaConfirma" class="form" required maxlength="100" /> <br>
                    <br><br>
                    
            <?php 
                }      
            ?>
				<a href='parteUsuario.php'><input type="button" class='voltar' value="Voltar"></a>
				<input type="reset" class="botaolimpar" value="Limpar" />
				<a href="index.php"><input type="button" class='voltar' value="Início"></a>
				
				<!--<a href="index.php"><button class="botaoinicio" type="button" value="Início"></button></a>-->
				
				<input type="submit" class="botaosalvar" id="salvar" value="Salvar" /></a>
				
           
			
	
            
            
            </body>                   
          </div>  
    </form>

<?php      
            
?>
		
</html>
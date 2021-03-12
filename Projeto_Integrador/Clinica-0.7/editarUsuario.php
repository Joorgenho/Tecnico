               
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
        $clienteEditar = ClienteDAO::getClienteById($id);
        $nome = $clienteEditar->getNome();
        $telefone = $clienteEditar->getTelefone();
        $email = $clienteEditar->getEmail();
        $cpf = $clienteEditar->getCpf();
        $sexo = $clienteEditar->getSexo();
        $filhos = $clienteEditar->getFilhos();
        $foto = $clienteEditar->getFoto();
        $nomeCid = $clienteEditar->getCidade();
        $action = "editar&idCliente=".$cliente->getId();
    }
    
?>
<html>
    <head>
        <meta charset="UTF-8">
		<link href="css/styleeditarUsuario.css" rel="stylesheet"
		type="text/css" />

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
	
    <form action="controller/salvarCliente.php?inserir=true<?php echo $action; ?>" method="POST" >
	<div class="cadastro">
			
			<?php
			
			  echo '<div class="form-group"> ';
			  echo '<div class="banco">Nome: '. $resultado[0]->getNome() . '</div>';
			  echo '<div class="banco">CPF: '. $resultado[0]->getCpf() . '</div>';
        
			  echo '  </div> ';        
    }
			
			?>
			
			
					
			<label>Telefone: </label>
            <input type="text" name="txtTelefone" class="form" value="<?php echo $telefone; ?>" maxlength="30" /> <br>
            <label>Email: </label>
            <input type="text" name="txtEmail" class="form" value="<?php echo $email; ?>" maxlength="30" /> <br>
            <label>Cidade: </label>
            <input type="text" name="txtCidade" class="form" value="<?php echo $nomeCid; ?>" maxlength="30" /> <br>
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
            <input type="radio" name="rbSexo" <?php echo $masculino; ?> class="form" value="m" /> Masculino <br><br>
            
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
				<a href="index.php">
				<button class="botaoinicio">Início</button></a>
				 <input type="reset" class="botaolimpar" value="Limpar" />
				 		<a href="consultarUsuario.php">
			<a href='consultarUsuario.php'><input type="button" class='voltar' value="Voltar"></a>
            <input type="submit" class="botaosalvar" value="Salvar" />
           
			
	
            
            
            </body>                   
          </div>  
    </form>

<?php      
            
?>
		
</html>

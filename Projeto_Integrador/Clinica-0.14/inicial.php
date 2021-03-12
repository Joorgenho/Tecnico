<?php
require_once 'utils.php';    
    if(session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
?>
<!Doctype html>
<html lang="PT-br">
	<head>
		<meta charset="UTF-8" />
		<title>Formularios</title>
		<link href="css/logar.css" rel="stylesheet" type="text/css"/>
	</head>
	<body style="background-image:url(imagem/familia.jpg)">
		<div id="container">
		<section id="topo">
		<h2>Logar</h2>
		</section>
    
    
  
     
    <form action="entrar.php" method="POST" name="logar">
        <input type="text" name="txtLogin" id="txtLogin" class="form" required
               placeholder="E-mail ou CPF: " />
     
        <input type="password" name="txtSenha" id="txtSenha" class="form"
               placeholder="Senha: " required />
			   
		<input type="checkbox" name="lembrar" id="lembrar" value="lembrar" />
					<label for="lembrar">Lembrar E-mail/CPF</label>	   
        <br />
        <input type="submit" value="Entrar" id="btnEntrar" class="entrar" />
		
		</form> 
				<a href="clientes.php">
            <button class="cadastrar" id="cadastro">Cadastrar</button>
		</a>
		<a href="index.php">
            <button class="sair">Voltar</button>
		</a>
    
		<?php
		if(isset($_GET['erro'])){
		 echo "<div id='erro'>".$_GET['erro']."</div>";
		}
		?>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/erro.js"></script>
	
	
    

		</div>
	</body>
</html>



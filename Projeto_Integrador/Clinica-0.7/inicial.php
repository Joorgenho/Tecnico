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
    
    
    <?php
        if( isset($_SESSION['logado']) && 
                  $_SESSION['logado']) {
    ?>
        
        
   <?php
          echo 'Olá, '.$_SESSION['nome'];
          echo '<a href="sair.php"><button>Sair</button></a>';
        }else{
   ?>
     
    <form action="entrar.php" method="POST" name="logar">
        <input type="text" name="txtLogin" class="form" required
               placeholder="E-mail ou CPF: " />
     
        <input type="password" name="txtSenha" class="form"
               placeholder="Senha: " required />
			   
		<input type="checkbox" name="lembrar" id="lembrar" value="lembrar" />
					<label for="lembrar">Lembrar E-mail/CPF</label>	   
        <br />
        <input type="submit" value="Entrar" class="entrar" />
		
		</form> 
				<a href="clientes.php">
            <button class="cadastrar">Cadastrar</button>
		</a>
		<a href="index.php">
            <button class="sair">Voltar</button>
		</a>
    
   
						
			
    <?php
        }
    ?>
    

		</div>
	</body>
</html>



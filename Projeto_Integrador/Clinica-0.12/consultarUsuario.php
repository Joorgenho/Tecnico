<!Doctype html>
<html lang="PT-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Projeto final</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		
				
	</head>
	<body>
		<div class="container">
			<header id="banner"></header>
			<nav id="menu">	
				<ul id="links">
					<li><a href="index.php">Pagina Inicial</a></li>
					<li><a href="exames.html">Exames</a></li>
					<li><a href="cirurgias.html">Cirurgias</a></li>
					<li><a href="contato.html">Contato</a></li>
					<a class="btn" href="sair.php"><button>Sair</button></a>
					
				</ul>
			</nav>
              

        <?php
        echo "<a href='parteUsuario.php'>
        <button class='botao'>Voltar</button></a>";
        
        ?>
        
		<h1 align="center">Editar/Excluir Usuário</h1>
		<img src="./imagem/iconusuario.png" class="photo1">
          
     <br><br><br>

            <form method="POST" action="editarUsuario.php">     

      <nav class="cpf">
		<label>Digite seu cpf:</label>   
	   <input type="text" class="form" name="cpf" size="30">
	  <button class="botao">Consultar</button>
	   <?php
	   
	   if(isset($_GET['erro'])){
		 echo" <p style='color:red'>CPF Inv&aacute;lido!!!!</p>";
	   }   
	   
	   ?>
	   
	   </nav>

 </form>
 
 <br><br><br>
 <footer class="rodape">
				Copyright &copy; 2019 - Todos os direitos reservados.
		</footer>
 </body>
</html>
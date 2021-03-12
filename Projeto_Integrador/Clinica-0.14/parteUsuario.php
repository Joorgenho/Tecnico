<!Doctype html>
<html lang="PT-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Projeto final</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
				
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
					<a class="btn" id="sair" href="sair.php"><button>Sair</button></a>
				</ul>
			</nav>
			
			<br>

        <h1 align="center">Seja Bem-vindo! </h1>
   
        <br>
                
       	<div class="bloco">
			<article class="coluna" align="center">
				<figure>
				<h2>Marcar Consultas/Exames</h2>
				<img src="./imagem/marcarconsulta.png" class="fotos" class="scaled">
				<figcaption class="texto">Exames completos para todos os tipos de situações, com agilidade e pontualidade.</figcaption>
				<a href="novaConsulta.php">
				<br>
				<button class="botao" id="novaconsulta">Marcar nova consulta</button></a>
				</figure>
				
				<figure>
				<h2>Consultas Marcadas</h2>	
				<img src="./imagem/marcarexame.png" class="fotos" class="scaled">
				<figcaption class="texto">Verifique suas consultas já marcadas conosco, para não perder seu horário.</figcaption>
				<a href="consultarConsulta.php">
				<br>
				<button class="botao" id="consultas">Consultas</button></a>
				</figure>
				
				<figure>
				<h2>Editar Usuário</h2>			
				<img src="./imagem/editarusuario.png" class="fotos" class="scaled">
				<figcaption class="texto">Mantenha sempre atualizado o seu cadastro para receber nossas novidades.</figcaption>
				<a href="consultarUsuario.php">
				<br>
				<button class="botao" id="btnUsuario">Editar Usuário</button></a>
				</figcaption>
				</article>
				</div>
              
     <br> <br> <br> <br> <br>
	
	<footer class="rodape">
				Copyright &copy; 2019 - Todos os direitos reservados.
		</footer>
		
		<?php
		if(isset($_GET['msg'])){
		 echo "<div id='msg'>".$_GET['msg']."</div>";
		}
		?>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/msg.js"></script>
		
		 </body>
</html>
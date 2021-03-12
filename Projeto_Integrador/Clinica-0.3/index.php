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
					<li><a href="index.php">Página Inicial</a></li>
					<li><a href="exames.html">Exames</a></li>
					<li><a href="cirurgias.html">Cirurgias</a></li>
					<li><a href="contato.html">Contato</a></li>
					<a class="btn" href="inicial.php"><button>Logar</button></a>
				</ul>
			</nav>
			
			<ul class="bxslider">
				
					<li><img src="imagem/foto1.png"/></li>
					<li><img src="imagem/foto2.png"/></li>
					<li><img src="imagem/foto3.png"/></li>
					<li><img src="imagem/foto4.png"/></li>
			</ul>
		
	       <br> <br> <br> <br> 
        
        <h1 align="center">Seja bem vindo! </h1>
        
        <a href="tipoConsulta.php">
            <h1 align="center">Conheca nossos tipos de consultas </h1></a>
       
			<article class="coluna" align="center">
				<h2>Consultas</h2>	
				<img src="./imagem/consultas.png" class="fotos" class="scaled">
				<div class=figure>
				<h1 class="texto">Realizamos diversos exames e temos ampla atuação com cirurgias. Agende um horário conosco e faça sua consulta.</h1>
				</div>
			
				<h2>Exames</h2>	
				<img src="./imagem/exames.png" class="fotos" class="scaled">				
				<img src="./imagem/exames1.jpg" class="fotos" class="scaled">				
				<div class=figure>
				<h1 class="texto">Exames com diagnósticos completos para todos os tipos de situações, com agilidade e pontualidade.</h1>
				</div>
								
				<h2>Cirurgias</h2>			
				<img src="./imagem/cirurgia.png" class="fotos" class="scaled">
				<img src="./imagem/cirurgia1.jpg" class="fotos" class="scaled">
				<div class=figure>
				<h1 class="texto">As melhores técnicas para solucionar defeitos e doenças oculares, todas feitas por especialistas.</h1>
				</div>
				</article>
				
        <?php
            
        ?>
		
		<footer class="rodape">
				Copyright &copy; 2019 - Todos os direitos reservados.
		</footer>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript">
			$('.bxslider').bxSlider({
				auto: true,
				pause: 3000,
				speed: 1000,
			});;
		</script>
    </body>   
</html>




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
               
			   <br><br>
        <h1 align="center">Tipos de atendimentos</h1>
      
  

      
        <br><br><br><br>

   

            <table class="table" border="1px">
                <thead>
                <th>Exame</th>   
                <th>Função/Indicação</th>
                <th>Como é feito?</th>
                <th>Orientação ao paciente</th>
                </thead>

                <tbody>
                    <?php
                    require_once 'utils.php';
                    $array = getExames();
                    foreach ($array as $value) {
                        echo "<tr>";
                        echo "<td>". $value['exame'] . "</td>";
                        echo "<td>". $value['funcao'] . "</td>";
                        echo "<td>". $value['comofeito'] . "</td>";
                        echo "<td>". $value['orientacao'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
     </table>
    </body>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
	<br><br><br><br><br><br><br><br>
	
	<footer class="rodape">
				Copyright &copy; 2019 - Todos os direitos reservados.
		</footer>
		
</html>





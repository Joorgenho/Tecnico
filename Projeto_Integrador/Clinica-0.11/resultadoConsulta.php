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
					include_once 'model/clsConsulta.php';
					include_once 'dao/clsConexao.php';
					include_once 'dao/clsConsultaDAO.php';
					?>
	<br><br><br>
    
    <a href="consultarConsulta.php">
        <button class="botao">Voltar</button></a>
    <br><br>

    <h1 align="center">Suas consultas agendadas!</h1>

<section class="tabela">

    <?php
	
	if($_POST['cpf'] == ''){
  header("Location:consultarConsulta.php?Erro=Preenchimento Obrigatorio");
 } else{

        $cpf = $_POST['cpf'];

        $sql = " SELECT id, nome, telefone, cpf, email, nomeM, dia, horario FROM consulta where cpf = " . $cpf . " ";
        $resultado = ConsultaDAO::getConsulta($sql);
		

        echo '<table border="1"> ';
        echo '  <tr> ';
        echo '      <th>Nome</th> ';
        echo '      <th>Telefone</th> ';
        echo '      <th>Cpf</th> ';
        echo '      <th>Email</th> ';
        echo '      <th>Nome do Médico</th> ';
        echo '      <th>Dia</th> ';
        echo '      <th>Horario</th> ';
        echo '  </tr> ';
        foreach ($resultado as $value) {
            echo '<tr>';
            echo '<td>'.$value->getNome().'</td>';
            echo '<td>'.$value->getTelefone().'</td>';
            echo '<td>'.$value->getCpf().'</td>';
            echo '<td>'.$value->getEmail().'</td>';
            echo '<td>'.$value->getNomeM().'</td>';
            echo '<td>'.$value->getDia().'</td>';
            echo '<td>'.$value->getHorario().'</td>';
            echo '</tr>';
         
        }
    } 
	
    ?>
	</table>
</section>
<br><br><br>	
	
	<footer class="rodape">
				Copyright &copy; 2019 - Todos os direitos reservados.
		</footer>
		
	
	</div>	
</body>
</html>
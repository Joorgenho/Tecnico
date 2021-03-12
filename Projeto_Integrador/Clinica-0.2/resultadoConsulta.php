<?php
include_once 'model/clsConsulta.php';
include_once 'dao/clsConexao.php';
include_once 'dao/clsConsultaDAO.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <a href="index.php">
        <button>Início</button></a>
    <a href="consultarConsulta.php">
        <button>Voltar</button></a>
    <br><br>

    <title>Suas consultas agendadas!</title>
</head>

<body>
    <?php
    if (isset($_POST['cpf'])) {

        $cpf = $_POST['cpf'];

        $sql = " SELECT id, nome, telefone, cpf, email, nomeM, dia, horario FROM consulta where cpf = " . $cpf . " ";
        $resultado = ConsultaDAO::getConsulta($sql);

        echo '<table border="1"> ';
        echo '  <tr> ';
        echo '      <th>Nome</th> ';
        echo '      <th>Telefone</th> ';
        echo '      <th>Email</th> ';
        echo '      <th>Cpf</th> ';
        echo '      <th>Nome do Médico</th> ';
        echo '      <th>Dia</th> ';
        echo '      <th>Horario</th> ';
        echo '  </tr> ';
        echo ' <tbody>';
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
</body>
</html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>Tipos de atendimentos</title>
   <a href="index.php">
        <button>Início</button></a>
    </head>
    <body>

      
        <br><br><br><br>

   

            <table class="table">
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
</html>





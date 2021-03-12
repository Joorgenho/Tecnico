<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
            <?php
        echo '<a href="parteUsuario.php"><button class="btn btn-sucess">Voltar</button></a>';
        echo '<a href="sair.php"><button class="btn btn-danger">Sair</button></a>';
        ?>
        
        <br><br>
        
        <title>Consulte suas consultas agendadas!</title>
    </head>
    <body>

 <form method="POST" action="resultadoConsulta.php">
      

        <table>
 <tr>
   <td>Digite seu cpf:</td>
   <td>
       <input type="number" class="form-control" name="cpf" size="100"> <br /></td>
   <input type="submit" class="btn btn-primary">
 </tr>
</table>
 </form>
 </body>
</html>
        
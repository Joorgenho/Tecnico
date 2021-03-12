
<html>
    <head>
        <meta charset="UTF-8">
              

        <?php
        echo '<a href="consultarConsulta.php">
        <button>Voltar</button></a>';
        echo '<a href="sair.php"><button>Sair</button></a>';
        ?>
        
        <title>Editar/Excluir Usuário</title>
    </head>
        <body>

            <form method="POST" action="editarUsuario.php">     

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
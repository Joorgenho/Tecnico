<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
         <?php
        echo '<a href="sair.php"><button>Sair</button></a>';
        ?>
        <title>Editar/Excluir Usuário</title>
    </head>
    <body>
    <table border="1">
            <tr>
                <th>Código</th>
                <th>Foto</th>
                <th>Nome do Cliente</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Confirme o E-mail</th>
                <th>Cidade</th>
                <th>Sexo</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <?php

                    foreach ($lista as $cli){
                        echo '<tr> ';
                        echo '   <td>'.$cli->getId().'</td>';
                        echo '   <td>'.$cli->getNome().'</td>';
                        echo '   <td>'.$cli->getCpf().'</td>';
                        echo '   <td>'.$cli->getTelefone().'</td>';
                        echo '   <td>'.$cli->getEmail().'</td>';
                        echo '   <td>'.$cli->getEmailconf().'</td>';
                        echo '   <td>'.$cli->getCidade()->getNome().'</td>';
                        if( $cli->getSexo() == "f" )
                            echo '   <td>Feminino</td>';
                        else
                            echo '   <td>Masculino</td>';
                        
                        if( $cli->getFilhos() )
                            echo '   <td>Sim</td>';
                        else
                            echo '   <td>Não</td>';
                        
                        echo '   <td><a href="frmCliente.php?editar&idCliente='.$cli->getId().'" ><button>Editar</button></a></td>';
                        echo '   <td><a href="controller/salvarCliente.php?excluir&idCliente='.$cli->getId().'" ><button>Excluir</button></a></td>';
                        echo '</tr>';
                        
                    }
            ?>
            
        </table>
        
        <?php
        
            
            
        ?>
        
    </body>
</html>

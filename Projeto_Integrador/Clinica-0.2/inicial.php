<?php
require_once 'utils.php';    
    if(session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
?>
<header>
    
    
    <?php
        if( isset($_SESSION['logado']) && 
                  $_SESSION['logado']) {
    ?>
        <a href="tiposconsulta.php">
            <h1 align="center">Conheca nossos tipos de consultas </h1>
            <button>Conhecer</button></a>
        
        
   <?php
          echo 'Olá, '.$_SESSION['nome'];
          echo '<a href="sair.php"><button>Sair</button></a>';
        }else{
   ?>
    | 
    <form action="entrar.php" method="POST" >
        <input type="text" name="txtLogin" required
               placeholder="E-mail ou CPF: " />
        
        <input type="password" name="txtSenha"
               placeholder="Senha: " required />
        
        <input type="submit" value="Entrar" />
    </form> 
    
    <a href="clientes.php">
            <button>Cadastre-se</button></a>
    
    <?php
        }
    ?>
    
</header>

<hr>

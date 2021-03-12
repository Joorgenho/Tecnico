<?php
    include_once 'model/clsCliente.php';
    include_once 'dao/clsClienteDAO.php';
    include_once 'dao/clsConexao.php';
    
    session_start();
    
    $nome = "";
    $telefone = "";
    $email = "";
    $cpf = "";
    $sexo = "";
    $nomeCid = "";
    $foto = "sem_foto.png";
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idCliente'];
        $cliente = ClienteDAO::getClienteById($id);
        $nome = $cliente->getNome();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();
        $cpf = $cliente->getCpf();
        $sexo = $cliente->getSexo();
        $filhos = $cliente->getFilhos();
        $foto = $cliente->getFoto();
        $nomeCid = $cliente->getCidade();
        $action = "editar&idCliente=".$cliente->getId();
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php
        echo '<a href="sair.php"><button>Sair</button></a>';
        ?>
        <title>Market N171 - Cadastrar Cliente</title>
    </head>
    <body>
        
         <h1 align="center">Cadastrar Cliente</h1>
        
        <br><br>
        
        <form action="controller/salvarCliente.php?inserir=true" method="POST" 
              enctype="multipart/form-data">
            
                       
            <label>Nome: </label>
            <input type="text" name="txtNome" value="<?php echo $nome; ?>" required maxlength="100" /> <br>
            <label>Telefone: </label>
            <input type="text" name="txtTelefone" value="<?php echo $telefone; ?>" maxlength="30" /> <br>
            <label>E-mail: </label>
            <input type="email" name="txtEmail" value="<?php echo $email; ?>" required /> <br>
            
            <label>CPF: </label>
            <input type="text" name="txtCPF" value="<?php echo $cpf; ?>" required /> <br>
            
            <label>Cidade: </label>
            <input type="text" name="txtCidade" value="<?php echo $nomeCid; ?>" required /> <br>
                                         
            
            
            <br>
            <?php 
                $feminino = "";
                $masculino = "";
                if( $sexo == "f"){
                    $feminino = " checked ";
                }
                if( $sexo == "m"){
                    $masculino = " checked ";
                }
            ?>
            
            <label>Sexo: </label>
            <input type="radio" name="rbSexo" <?php echo $feminino; ?> value="f" required /> Feminino 
            <input type="radio" name="rbSexo" <?php echo $masculino; ?> value="m" /> Masculino <br><br>
            
            
            <label>Foto: </label>
            
            <?php 
                if( isset($_REQUEST['editar'])){
                    echo '<img src="fotos_clientes/'.$foto.'" width="30px" />';
                }
            ?>
            
            <input type="file" name="foto" /> <br><br>
            <?php
                if( !isset( $_REQUEST['editar'] )){
            ?>
                    <label>Senha: </label>
                    <input type="password" name="txtSenha" required maxlength="100"  /> <br><br>
                    <label>Confirme sua Senha: </label>
                    <input type="password" name="txtSenhaConfirma" required maxlength="100" /> <br>
                    <br><br>
                    
            <?php 
                }      
            ?>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
            
            
        </form>     
        
    </body>
</html>

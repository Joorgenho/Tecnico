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
        $clienteEditar = ClienteDAO::getClienteById($id);
        $nome = $clienteEditar->getNome();
        $telefone = $clienteEditar->getTelefone();
        $email = $clienteEditar->getEmail();
        $cpf = $clienteEditar->getCpf();
        $sexo = $clienteEditar->getSexo();
        $filhos = $clienteEditar->getFilhos();
        $foto = $clienteEditar->getFoto();
        $nomeCid = $clienteEditar->getCidade();
        $action = "editar&idCliente=".$cliente->getId();
    }
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <a href="index.php">
        <button>Início</button></a>
    <a href="consultarUsuario.php">
        <button>Voltar</button></a>
    <br><br>

    <title>Edite suas informações!</title>
</head>

<body>
    <?php
    if (isset($_POST['cpf'])) {

        $cpf = $_POST['cpf'];

        $sql = " SELECT id, foto, nome, cpf, telefone, email, nomeCid, sexo, senha, acesso FROM clientes where cpf = " . $cpf . " ";
        $resultado = ClienteDAO::getClientes($sql);
        
        echo '<div class="form-group"> ';
        echo '<br><strong><label for="exampleFormControlInput1">Foto: </label></strong>'. $resultado[0]->getFoto();
        echo '<br><strong><label for="exampleFormControlInput1">Nome: </label></strong>'. $resultado[0]->getNome();
        echo '<br><strong><label for="exampleFormControlInput1">CPF: </label></strong></th>'. $resultado[0]->getCpf();
        
        echo '  </div> ';        
    }
    ?>        
    <form action="controller/salvarCidade.php?<?php echo $action; ?>" method="POST" >
    <label>Telefone: </label>
            <input type="text" name="txtTelefone" value="<?php echo $telefone; ?>" maxlength="30" /> <br>
            <label>Email: </label>
            <input type="text" name="txtEmail" value="<?php echo $email; ?>" maxlength="30" /> <br>
            <label>Cidade: </label>
            <input type="text" name="txtCidade" value="<?php echo $nomeCid; ?>" maxlength="30" /> <br>
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
<?php      
            
?>
</html>
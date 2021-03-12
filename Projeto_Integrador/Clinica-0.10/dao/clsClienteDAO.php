<?php


class ClienteDAO {
    
    public static function inserir($cliente){
        $sql = "INSERT INTO clientes "
                . " ( id, nome, telefone, cpf, email, emailconf, senha, "
                . "   nomeCid, sexo, acesso ) VALUES "
                . " ( '".$cliente->getId()."' , "
                . "   '".$cliente->getNome()."' , "
                . "   '".$cliente->getTelefone()."' , "
                . "   '".$cliente->getCpf()."' , "
                . "   '".$cliente->getEmail()."' , "
                . "   '".$cliente->getEmailConf()."' , "
                . "   '".$cliente->getSenha()."' , "
				. "   '".$cliente->getCidade()." ', "
                . "   '".$cliente->getSexo()."' , "
                . "   '".$cliente->getAcesso()."'  ) ";
        
        
               
        
        Conexao::executar( $sql );
    }
    
    public static function editar($cliente){
        $sql = "UPDATE clientes SET " 
                . " nome =     '".$cliente->getNome()."' , "
                . " telefone = '".$cliente->getTelefone()."' , "
                . " cpf =      '".$cliente->getCpf()."' , "
                . " email =    '".$cliente->getEmail()."' , "
                . " emailconf =    '".$cliente->getEmailconf()."' , "
                . " nomeCid = ".$cliente->getCidade()." , "
                . " sexo =     '".$cliente->getSexo()."' , "                
                . " WHERE id = ".$cliente->getId();
        
        Conexao::executar( $sql );
    }
    
    
    public static function excluir($cliente){
        $sql = "DELETE FROM clientes "
             . " WHERE id =  ".$cliente->getId();
        
        Conexao::executar( $sql );
    }
    
    public static function getClientes($sql = null){
        if ($sql == null) {
        $sql = " SELECT c.id, c.nome, c.fone, c.cpf,"
             . " c.email, c.emailconf, c.nomeCid c.sexo"
             . " FROM clientes c "
             . " ORDER BY c.nome ";
        }
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while( list( $id, $nome, $cpf, $telefone, $email, $emailconf,
            $nomeCid, $sexo, $senha, $acesso) = mysqli_fetch_row($result) ){
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente->setNome($nome);
            $cliente->setCpf($cpf);
            $cliente->setTelefone($telefone);
            $cliente->setEmail($email);
            $cliente->setEmailconf($emailconf);
            $cliente->setCidade($nomeCid);
            $cliente->setSexo($sexo); 
            $cliente->setSenha($senha);
            
           
  
            $lista->append($cliente);
        }
        
        return $lista;
    }
    
    
   public static function getClienteById( $id ){
        $sql = " SELECT c.id, c.nome, c.telefone, c.cpf,"
             . " c.email, c.emailconf, c.nomeCid, c.sexo"
             . " FROM clientes c "
             . " WHERE c.id = ".$id 
             . " ORDER BY c.nome ";
        
        $result = Conexao::consultar($sql);
      
        list( $id, $nome, $fone, $cpf, $email, $emailconf,
            $foto, $nomeCid, $sexo) = mysqli_fetch_row($result);
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente->setNome($nome);
            $cliente->setTelefone($fone);
            $cliente->setEmail($email);
            $cliente->setEmailConf($emailconf);
            $cliente->setCpf($cpf);
            $cliente->setCidade($nomeCid);
            $cliente->setSexo($sexo);          
            
            
        return $cliente;
    }
  
    public static function logar($login, $senha){
        $sql = " SELECT * "
             . " FROM clientes "
             . " WHERE ( email = '".$login."' OR "
             . "           CPF = '".$login."' )  "
             . "     AND senha = '".$senha."'    ";
        $result = Conexao::consultar($sql);

        if( mysqli_num_rows( $result ) > 0 ){
            $dados = mysqli_fetch_assoc( $result );            
            $cliente = new Cliente();
            $cliente->setId( $dados['id'] );
            $cliente->setNome( $dados['nome'] );
            $cliente->setAcesso($dados['acesso']);
            
            return $cliente;
        } 
        
    }
   
    
}
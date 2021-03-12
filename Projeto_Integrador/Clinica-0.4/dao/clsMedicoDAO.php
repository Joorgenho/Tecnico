<?php

class MedicoDAO {
    
    public static function inserir($medico){
        $sql = "INSERT INTO medico "
                . " ( id, nome, foto, especialidade ) VALUES "                             
                . " ( '".$medico->getId()."' , "
                . "   '".$medico->getNome()."' , "
                . "   '".$medico->getFoto()."' , "                
                . "   '".$medico->getEspecialidade()."'  ) ";
        
        Conexao::executar( $sql );
    }
    
    public static function editar($medico){
        $sql = "UPDATE medico SET " 
                . " nome =      '".$medico->getNome()."' , "
                . " foto =      '".$medico->getFoto()."' , "
                . " especialidade =      ".$medico->getEspecialidade()." , "                
                . " WHERE id = ".$medico->getId();
        
        Conexao::executar( $sql );
    }
     
    public static function excluir($medico){
        $sql = "DELETE FROM medico "
             . " WHERE id =  ".$medico->getId();
        
        Conexao::executar( $sql );
    }
    
    public static function getMedico(){
        
        $sql = " SELECT m.id, m.nome, m.foto, m.especialidade"
             . " FROM medico m "             
             . " ORDER BY m.nome ";

        $result = Conexao::consultar($sql);
                
        $lista = new ArrayObject();
        if( $result != NULL ){ 
        while( list( $id, $nome, $foto, $especialidade) = mysqli_fetch_row($result) ){
                    
            $medico = new medico();
            $medico->setId($id);
            $medico->setNome($nome);
            $medico->setFoto($foto);
            $medico->setEspecialidade($especialidade);           
           
            $lista->append($especialidade);
        }  
    }    
        
        return $lista;
    }
    
   public static function getMedicoById( $id ){
         $sql = " SELECT m.id, m.nome, m.especialidade"
             . " FROM medico m "             
             . " WHERE m.id = ".$id ;
        
        $result = Conexao::consultar($sql);
      
        list( $id, $nome, $foto, $especialidade) = mysqli_fetch_row($result);
                        
            $medico = new Medico();
            $medico->setId($id);
            $medico->setNome($nome);
            $medico->setFoto($foto);
            $medico->setEspecialidade($especialidade);
            
            
        return $medico;
    }  
}

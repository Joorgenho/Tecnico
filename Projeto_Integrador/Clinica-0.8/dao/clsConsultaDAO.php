<?php

class ConsultaDAO {

    public static function inserir($consulta) {
        $sql = "INSERT INTO consulta "
                . " ( id, nome, telefone, cpf, email, nomeM, "
                . "   dia, horario) VALUES "
                . " ( '" . $consulta->getId() . "' , "
                . "   '" . $consulta->getNome() . "' , "
                . "   '" . $consulta->getTelefone() . "' , "
                . "   '" . $consulta->getCPF() . "' , "
                . "   '" . $consulta->getEmail() . "' , "
                . "   '" . $consulta->getNomeM() . "' , "
                . "   '" . $consulta->getDia() . "' , "
                . "   '" . $consulta->getHorario() . "' ) ";

        Conexao::executar($sql);
    }

    public static function editar($consulta) {
        $sql = "UPDATE consulta SET "
                . " nome =     '" . $consulta->getNome() . "' , "
                . " telefone = '" . $consulta->getTelefone() . "' , "
                . " cpf =      '" . $consulta->getCpf() . "' , "
                . " email =    '" . $consulta->getEmail() . "' , "
                . " nomeM  =    '" . $consulta->getNomeM() . "' , "
                . " dia = '" . $consulta->getDia() . "' , "
                . " horario =     '" . $consulta->getHorario() . "' , "
                . " WHERE id = " . $consulta->getId();

        Conexao::executar($sql);
    }

    public static function excluir($consulta) {
        $sql = "DELETE FROM consulta "
                . " WHERE id =  " . $consulta->getId();

        Conexao::executar($sql);
    }

    public static function getConsulta($sql = null) {
        if ($sql == null) {
			
            $sql = " SELECT c.id, c.nome, c.telefone, c.cpf,"
                    . " c.email,c.nomeM, c.dia, c.horario"
                    . " FROM consulta c "
                    . " ORDER BY c.nome ";
        }
       
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        
        while(list( $id, $nome, $telefone, $cpf, $email, $nomeM, $dia, $horario) = mysqli_fetch_row($result)) {
            $consulta = new Consulta();
            $consulta->setId($id);
            $consulta->setNome($nome);
            $consulta->setTelefone($telefone);
            $consulta->setCpf($cpf);
            $consulta->setEmail($email);
            $consulta->setNomeM($nomeM);
            $consulta->setDia($dia);
            $consulta->setHorario($horario);


          
        
        return $lista;
		}
    }

    public static function getConsultaById($id) {
        $sql = " SELECT c.id, c.nome, c.telefone, c.cpf,"
                . " c.email, c.nomeM,c.dia, c.horario"
                . " FROM consulta c "
                . " WHERE c.id = " . $id
                . " ORDER BY c.nome ";

        $result = Conexao::consultar($sql);

        list( $id, $nome, $telefone, $cpf, $email,
                $nomeM, $dia, $horario) = mysqli_fetch_row($result);

        $consulta = new Consulta();
        $consulta->setId($id);
        $consulta->setNome($nome);
        $consulta->setTelefone($telefone);
        $consulta->setCpf($cpf);
        $consulta->setEmail($email);
        $consulta->setNomeM($nomeM);
        $consulta->setDia($dia);
        $consulta->setHorario($horario);


        return $consulta;
    }

}

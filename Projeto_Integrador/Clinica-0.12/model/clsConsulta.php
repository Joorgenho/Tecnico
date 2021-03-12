<?php

class Consulta {
    private $id, $nome, $telefone, $email, $cpf,
            $nomeM, $dia, $horario;
    
    function __construct($id = NULL, $nome = NULL, $telefone = NULL, 
            $email = NULL, $cpf = NULL, $nomeM=NULL, $dia=NULL, $horario=NULL) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->nomeM = $nomeM;
        $this->dia = $dia;
        $this->horario = $horario;
    }
    
    
        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNomeM() {
        return $this->nomeM;
    }

    

    function getDia() {
        return $this->dia;
    }

    function getHorario() {
        return $this->horario;
    }

   

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNomeM($nomeM) {
        $this->nomeM = $nomeM;
    }

    

    function setDia($dia) {
        $this->dia = $dia;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    
}

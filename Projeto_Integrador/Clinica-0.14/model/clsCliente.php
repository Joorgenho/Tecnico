<?php

class Cliente {
    private $id, $nome, $telefone, $email, $cpf,
            $senha, $cidade, $sexo, $acesso;
    
    function __construct($id = NULL, $nome = NULL, $telefone = NULL, 
            $email = NULL, $cpf = NULL, $senha = NULL, 
            $nomeCid = NULL, $sexo = NULL, $acesso= null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;        
        $this->cidade = $nomeCid;
        $this->sexo = $sexo;
        $this->acesso = $acesso;
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

    function getSenha() {
        return $this->senha;
    }

    

    function getCidade() {
        return $this->cidade;
    }
	
    function getSexo() {
        return $this->sexo;
    }
    
    function getAcesso() {
        return $this->acesso;
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

    function setSenha($senha) {
        $this->senha = $senha;
    }

    

    function setCidade($nomeCid) {
        $this->cidade = $nomeCid;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    
    function setAcesso($acesso) {
        $this->acesso = $acesso;
    }

   

}

<?php

class Medico {
    private $id, $nome, $especialidade, $foto;
    
    function __construct($id = NULL, $nome = NULL, $especialidade = NULL, $foto = NULL){
        $this->id = $id;
        $this->nome = $nome;
        $this->especialidade = $especialidade;
        $this->foto = $foto;
        
    }
      
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEspecialidade() {
        return $this->especialidade;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }
   

}	

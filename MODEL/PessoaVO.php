<?php

/* Classe que permite transferir os dados entre os diretórios do mvc */
class PessoaVO{
    
    /* Atributos */
    private $id;
    private $nome;
    private $sobrenome;
    private $nome_user;

    /* Métodos get & set */
    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(){
        return $this->nome = $nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome(){
        return $this->sobrenome = $sobrenome;
    }

    public function getNome_user(){
        return $this->nome_user;
    }

    public function setPreco(){
        return $this->nome_user = $nome_user;
    }
}
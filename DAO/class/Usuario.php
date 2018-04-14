<?php

class usuario{
    private $idUsuario;
    private $desLogin;
    private $desSenha;
    private $dtCadastro;
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getDesLogin(){
        return $this->desLogin;
    }
    public function getDesSenha(){
        return $this->desSenha;
    }
    public function getDtCadastro(){
        return $this->dtCadastro;
    }
    
}

?>
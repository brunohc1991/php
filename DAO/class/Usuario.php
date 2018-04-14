<?php

require_once("Config.php");

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
    
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    
    public function setDesLogin($desLogin){
        $this->desLogin = $desLogin;
    }
    
    public function setDesSenha($desSenha){
        $this->desSenha = $desSenha;
    }
    
    public function setDtCadastro($dtCadastro){
        $this->dtCadastro = $dtCadastro;
    }
    
    public function loadById($id){
        $sql = new Sql();
        
        $result = $sql->select("select * from tb_usuarios where idUsuario = :ID",array(
                ":ID"=>$id
        ));
        
        if(count($result[0]) > 0){
            $row = $result[0];
            
            $this->setIdUsuario($row['idUsuario']);
            $this->setDesLogin($row['desLogin']);
            $this->setDesSenha($row['desSenha']);
            $this->setDtCadastro(new DateTime($row['dtCadastro']));
        }
    }
    
    public function __toString(){
        return json_encode(array(
            
            "idUsuario"=>$this->getIdUsuario(),
            "desLogin"=>$this->getDesLogin(),
            "desSenha"=>$this->getDesSenha(),
            "dtCadastro"=>$this->getDtCadastro()->format("d/m/Y")
            
        ));
    }
}

?>
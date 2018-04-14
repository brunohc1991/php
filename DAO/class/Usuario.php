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
    
    public function setData($data){
        $this->setIdUsuario($data['idUsuario']);
        $this->setDesLogin($data['desLogin']);
        $this->setDesSenha($data['desSenha']);
        $this->setDtCadastro(new DateTime($data['dtCadastro']));
    }
    
    public function loadById($id){
        $sql = new Sql();
        
        $result = $sql->select("select * from tb_usuarios where idUsuario = :ID",array(
                ":ID"=>$id
        ));
        
        if(count($result[0]) > 0){
            $this->setData($result[0]);
        }
    }
    
    public static function getList(){
        $sql = new Sql();
        
        return $sql->select("select * from tb_usuarios");
    }
    
    public static function search($login){
        $sql = new Sql();
        
        return $sql->select("select * from tb_usuarios where desLogin LIKE :SEARCH", array(
            ':SEARCH'=>"%".$login."%"
        ));
    }
    
    public function login($login, $pass){
        $sql = new Sql();
        
        $result = $sql->select("select * from tb_usuarios where desLogin = :LOGIN and desSenha = :PASS",array(
                ":LOGIN"=>$login,
                ":PASS"=>$pass
        ));
        
        if(count($result[0]) > 0){
        
            $this->setData($result[0]);
            
        }else{
            throw new Exception("Login e/ou Senha invalidos");
        }
    }
    
    
    public function insert(){
        $sql = new Sql();
        
        $result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASS)",array(
            ":LOGIN"=>$this->getDesLogin(),
            ":PASS"=>$this->getDesSenha()
        ));
        
        if(count($result)>0){
            $this->setData($result[0]);
        }
    }
    
    public function upDate($login, $pass){
        
        $this->setDesLogin($login);
        $this->setDesSenha($pass);
        
        $sql = new Sql();
        
        $sql->query("UPDATE tb_usuarios SET desLogin = :LOGIN, desSenha = :PASS WHERE idUsuario = :ID", array(
            ':LOGIN'=>$this->getDesLogin(),
            ':PASS'=>$this->getDesSenha(),
            ':ID'=>$this->getIdUsuario()
        ));
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
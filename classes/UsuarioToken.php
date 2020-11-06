<?php

class UsuarioToken {

private $pdo;

public function __construct($pdoExterno) {
    $this->pdo = $pdoExterno;
}

public function adicionarUsuarioToken($id, $token, $data) {
    $sql = $this->pdo->prepare("SELECT * FROM usuarios_token WHERE id_usuario = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    if($sql->rowCount() == 0) {
        $sql = $this->pdo->prepare("INSERT INTO usuarios_token(id_usuario,hash,data_expiracao) VALUES(
        :id,:token,:data)");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":token", $token);
        $sql->bindValue(":data", $data);
        $sql->execute();
        
    }
}

public function selectArrayToken($token) {
    $sql = $this->pdo->prepare("SELECT * FROM usuarios_token WHERE hash = :token");
    $sql->bindValue(":token",$token);
    $sql->execute();
    $info = $sql->fetch();
    if($sql->rowCount() > 0) {
        return $info;
    } else {
        return false;
    }
}

public function verificaToken($token, $data) {
    $sql = $this->pdo->prepare("SELECT * FROM usuarios_token WHERE hash = :hash AND data_expiracao > NOW()");
    $sql->bindValue(":hash", $token);
    $sql->execute();
    $info = $sql->fetch();
    if($sql->rowCount() > 0) {  
        return true;
    } else{
        $newToken = md5(time().rand(0,9999).rand(0,9999));
        $sql = $this->pdo->prepare("SELECT * FROM usuarios_token WHERE hash = :hash");
        $sql->bindValue(":hash", $token);
        $sql->execute();
        $info = $sql->fetch();

        if($info['data_expiracao'] < date("Y-m-d H:i", strtotime('+2 hours' )) ) {
            $sql = $this->pdo->prepare("UPDATE usuarios_token SET hash = :newtoken, data_expiracao = :data WHERE hash= :token");
            $sql->bindValue(':newtoken', $newToken);
            $sql->bindValue(':data', $data);
            $sql->bindValue(':token', $token);
            $sql->execute();
        }            
    } 
}   

public function buscaToken($id) {
    $sql = $this->pdo->prepare("SELECT * FROM usuarios_token WHERE id_usuario = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    if($sql->rowCount() > 0) {
        $info = $sql->fetch();
        return $info['hash'];
    } else {
        return false;
    }
}

}
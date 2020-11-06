<?php

class Usuario {

    private $email;
    private $senha;
    private $nome;
    private $pdo;
    
    /* 
    * __construct para instânciar a classe e fazer a conexão com o banco de dados de acordo
    * com os argumentos passados no momento de instânciar a classe.
    */
    public function __construct($db,$host,$user,$pass) {
        try {
            $this->pdo = new PDO("mysql:dbname={$db};host={$host}",$user,$pass);
        } catch(Exception $e) {
            echo "ERRO: ".$e->getMessage();
        }
    }
    /*
    * função para adicionar um usuário ao banco de dados;
    */
    public function add($nome,$email,$senha,$tel) {
            if($this->select($email) === false) {
                $sql = $this->pdo->prepare("INSERT INTO usuarios(nome,email,senha,tel) VALUES(
                :nome,:email,:senha,:tel)");
                $sql->bindValue(":nome", $nome);
                $sql->bindValue(":email", $email);
                $sql->bindValue(":senha", md5($senha));
                $sql->bindValue(":tel", $tel);
                $sql->execute();

                return true;
            } else {
                return false;
            } 
    }
    /*
    * função para selecionar todos usuários do banco de dados;
    */
    public function SelectAll() {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $info = $sql->fetchAll();
            return $info;
        } else {
            $info = array();
            return $info;
        }
    }
    /*
    * função para selecionar um usuário em específico do banco de dados;
    */
    public function select($email) {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(":email",$email);
        $sql->execute();
        if($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function selectArray($email) {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(":email",$email);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $info = $sql->fetch();
            return $info;
        } else {
            return false;
        }
    }
    /*
    * função para editar um usuário ao banco de dados;
    */
    public function edit($nome,$email,$senha,$tel) {
        if($this->select($email)) {
            $sql = $this->pdo->prepare("UPDATE usuarios SET nome=:nome, senha=:senha WHERE email = :email");
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":email",$email);
            $sql->bindValue(":senha",$senha);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }
    /*
    * função para deletar um usuário em específico do banco de dados;
    */
    public function delete($email) {
        if($this->select($email)) {
            $sql= $this->pdo->prepare("DELETE FROM usuarios WHERE email = :email");
            $sql->bindValue(":email",$email);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

}


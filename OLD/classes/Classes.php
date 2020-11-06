<?php

class Usuario {
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
            if($this->select($email) == false) {
                $sql = $this->pdo->prepare("INSERT INTO usuarios(nome,email,senha,telefone) VALUES(
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
    public function selectAll() {
        $info = array();
        $sql = $this->pdo->prepare("SELECT * FROM usuarios");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $info = $sql->fetchAll();
            return $info;
        } else {
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
    /*
    * função para selecionar usuário de acordo com o email fornecido por parâmetro e retorna um array com
    * todos os dados do usuário selecionado.
    */
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
            $sql->bindValue(":senha",md5($senha));
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    public function mudarSenha($id) {
        
        $sql = $this->pdo->prepare("UPDATE usuarios SET senha = :senha WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":senha", md5(rand(0,9999).rand(0,9999).time()));
        $sql->execute();
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

    public function setPermissao($email, $permissao) {
        $usuario = $this->selectArray($email);
        if($usuario) {
            $sql = $this->pdo->prepare("UPDATE usuarios SET permissao = :permit WHERE email = :email");
            $sql->bindValue(":email", $usuario['email']);
            $sql->execute(); 
        }      
    }

    public function getPermissao($email) {
        $usuario = $this->selectArray($email);
        if($usuario) {
            return $usuario['permissao'];
        } else {
            return false;
        }
    }

}

class UsuarioToken extends Usuario {

    private $pdo;

    public function __construct($db,$host,$user,$pass) {
        try {
            $this->pdo = new PDO("mysql:dbname={$db};host={$host}",$user,$pass);
        } catch(Exception $e) {
            echo "ERRO: ".$e->getMessage();
        }
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

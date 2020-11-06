<?php

class Usuario {
    private $pdo;
    
    /* 
    * __construct para instânciar a classe e fazer a conexão com o banco de dados de acordo
    * com os argumentos passados no momento de instânciar a classe.
    */
    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }
    /*
    * função para adicionar um usuário ao banco de dados;
    */
    public function add($nome,$sobrenome, $email,$cpfcnpj, $cep,$usuario, $senha) {
            if($this->select($email) == false) {
                $sql = $this->pdo->prepare("INSERT INTO usuarios(nome,sobrenome,email,cpfcnpj,cep,usuario,senha) VALUES(
                :nome,:sobrenome,:email,:cpfcnpj,:cep,:usuario,:senha)");
                $sql->bindValue(":nome", $nome);
                $sql->bindValue(":sobrenome", $sobrenome);
                $sql->bindValue(":email", $email);
                $sql->bindValue(":cpfcnpj", $cpfcnpj);
                $sql->bindValue(":cep", $cep);
                $sql->bindValue(":usuario", $usuario);
                $sql->bindValue(":senha", md5($senha));
                $sql->execute();

                echo"<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');</script>";

                return true;
            } else {

                echo"<script language='javascript' type='text/javascript'>
                alert('Usuário NÃO cadastrado !');</script>";
                return false;
            } 
    }


    /*
    * função para selecionar todos usuários do banco de dados;
    */
    public function selectAll($p) {
        $info = array();
        $sql = $this->pdo->prepare("SELECT * FROM usuarios LIMIT :p, 10");
        $sql->bindValue(":p", $p, PDO::PARAM_INT);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
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

    public function selectById($id) {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $info = $sql->fetch();
            return $info;
        } else {
            return false;
        }
    }

    public function pesquisarUsuario($nome) {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE nome LIKE :nome LIMIT 5");
        $sql->bindValue(":nome", '%'.$nome.'%');
        $sql->execute();
        
        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }

    public function paginacao() {
        $sql = $this->pdo->query("SELECT COUNT(*) as c FROM usuarios");
        $total = 0;
        if($sql->rowCount() > 0) {
            $total = $sql->fetch();   
            return $total;
        } 
        return $total;
    }

    /*
    * função para editar um usuário ao banco de dados;
    */
    public function edit($nome,$sobrenome, $email,$cpfcnpj, $cep,$usuario, $senha) {
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

    public function mudarSenha($id, $senha) {
        
        $sql = $this->pdo->prepare("UPDATE usuarios SET senha = :senha WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":senha", md5($senha).time().rand(0,999));
        $sql->execute();
    }

    /*
    * função para deletar um usuário em específico do banco de dados;
    */
    public function delete($id) {
    
            $sql= $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
            $sql->bindValue(":id",$id);
            $sql->execute();
          
    }

    public function setPermissao($idUsuario, $permissao) {
        
            $sql = $this->pdo->prepare("UPDATE usuarios SET permissao = :permissao WHERE id = :idUsuario");
            $sql->bindValue(":idUsuario", $idUsuario);
            $sql->bindValue(":permissao", $permissao);
            $sql->execute(); 
            
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



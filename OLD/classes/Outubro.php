<?php

class Outubro {

    private $pdo; 

    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }

    public function selectOutubroRequerimentos() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
        procon, forum, semcelt, semef, semmurb, defesaCivil FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editOutubroRequerimentos($arrayRequerimentos = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE outubro SET  semgov = :semgov, semus = :semus, semas = :semas, semed = :semed, 
            semsopc = :semsopc, setrade = :setrade, gabineteDoPrefeito = :gabineteDoPrefeito, procon = :procon, forum = :forum,
            semcelt = :semcelt, semef = :semef, semmurb = :semmurb, defesaCivil = :defesaCivil");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO outubro (semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
            procon, forum, semcelt, semef, semmurb, defesaCivil)
            VALUES (:semgov, :semus, :semas, :semed, :semsopc, :setrade, :gabineteDoPrefeito, :procon, :forum, :semcelt, :semef,
            :semmurb, :defesaCivil)");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        }
        
    }

    public function selectOutubroImprensa() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, conteudos, clipings FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editOutubroImprensa($conteudos,$clipings) {
        $sql = $this->pdo->prepare("SELECT * FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE outubro SET conteudos = :conteudos, clipings = :clipings");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO outubro (conteudos, clipings) VALUES(:conteudos, :clipings)");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        }
    } 

    public function selectOutubroDesign() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, artes, impressoes FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    } 
    public function editOutubroDesign($pecas, $impressoes) {
        $sql = $this->pdo->prepare("SELECT * FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE outubro SET artes = :pecas, impressoes = :impressoes");
            $sql->bindValue(":pecas", $pecas);
            $sql->bindValue(":impressoes", $impressoes);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO outubro (artes, impressoes) VALUES (:artes, :impressoes)");
            $sql->prepare(":artes", $pecas);
            $sql->prepare(":impressoes", $impressoes);
            $sql->execute();
        }
    }

    public function selectOutubroFotografia() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, cobertura , material FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editOutubroFotografia($cobertura, $material) {
        $sql = $this->pdo->prepare("SELECT * FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE outubro SET cobertura = :cobertura, material = :material");
            $sql->bindValue(":cobertura", $cobertura);
            $sql->bindValue(":material", $material);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO outubro (cobertura, material) VALUES (:cobertura, :material)");
            $sql->prepare(":cobertura", $cobertura);
            $sql->prepare(":material", $material);
            $sql->execute();
        }
    }
    
    public function selectOutubroSocial() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, seguidores , alcance FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editOutubroSocial($seguidores,$alcance) {
        $sql = $this->pdo->prepare("SELECT * FROM outubro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE outubro SET seguidores = :seguidores, alcance = :alcance");
            $sql->bindValue(":seguidores", $seguidores);
            $sql->bindValue(":alcance", $alcance);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO outubro (seguidores, alcance) VALUES (:seguidores, :alcance)");
            $sql->prepare(":seguidores", $seguidores);
            $sql->prepare(":alcance", $alcance);
            $sql->execute();
        }
    }

}


<?php

class Setembro {

    private $pdo; 

    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }

    public function selectSetembroRequerimentos() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
        procon, forum, semcelt, semef, semmurb, defesaCivil FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editSetembroRequerimentos($arrayRequerimentos = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE setembro SET  semgov = :semgov, semus = :semus, semas = :semas, semed = :semed, 
            semsopc = :semsopc, setrade = :setrade, gabineteDoPrefeito = :gabineteDoPrefeito, procon = :procon, forum = :forum,
            semcelt = :semcelt, semef = :semef, semmurb = :semmurb, defesaCivil = :defesaCivil");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO setembro (semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
            procon, forum, semcelt, semef, semmurb, defesaCivil)
            VALUES (:semgov, :semus, :semas, :semed, :semsopc, :setrade, :gabineteDoPrefeito, :procon, :forum, :semcelt, :semef,
            :semmurb, :defesaCivil)");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        }
        
    }

    public function selectSetembroImprensa() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, conteudos, clipings FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editSetembroImprensa($conteudos,$clipings) {
        $sql = $this->pdo->prepare("SELECT * FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE setembro SET conteudos = :conteudos, clipings = :clipings");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO setembro (conteudos, clipings) VALUES(:conteudos, :clipings)");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        }
    } 

    public function selectSetembroDesign() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, artes, impressoes FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    } 
    public function editSetembroDesign($pecas, $impressoes) {
        $sql = $this->pdo->prepare("SELECT * FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE setembro SET artes = :pecas, impressoes = :impressoes");
            $sql->bindValue(":pecas", $pecas);
            $sql->bindValue(":impressoes", $impressoes);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO setembro (artes, impressoes) VALUES (:artes, :impressoes)");
            $sql->prepare(":artes", $pecas);
            $sql->prepare(":impressoes", $impressoes);
            $sql->execute();
        }
    }

    public function selectSetembroFotografia() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, cobertura , material FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editSetembroFotografia($cobertura, $material) {
        $sql = $this->pdo->prepare("SELECT * FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE setembro SET cobertura = :cobertura, material = :material");
            $sql->bindValue(":cobertura", $cobertura);
            $sql->bindValue(":material", $material);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO setembro (cobertura, material) VALUES (:cobertura, :material)");
            $sql->prepare(":cobertura", $cobertura);
            $sql->prepare(":material", $material);
            $sql->execute();
        }
    }
    
    public function selectSetembroSocial() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, seguidores , alcance FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editSetembroSocial($seguidores,$alcance) {
        $sql = $this->pdo->prepare("SELECT * FROM setembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE setembro SET seguidores = :seguidores, alcance = :alcance");
            $sql->bindValue(":seguidores", $seguidores);
            $sql->bindValue(":alcance", $alcance);
            $sql->execute();
        } else {    
            $sql = $this->pdo->prepare("INSERT INTO setembro (seguidores, alcance) VALUES (:seguidores, :alcance)");
            $sql->prepare(":seguidores", $seguidores);
            $sql->prepare(":alcance", $alcance);
            $sql->execute();
        }
    }

}


<?php

class Fevereiro {

    private $pdo; 

    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }

    public function selectFevereiroRequerimentos() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
        procon, forum, semcelt, semef, semmurb, defesaCivil FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editFevereiroRequerimentos($arrayRequerimentos = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE fevereiro SET  semgov = :semgov, semus = :semus, semas = :semas, semed = :semed, 
            semsopc = :semsopc, setrade = :setrade, gabineteDoPrefeito = :gabineteDoPrefeito, procon = :procon, forum = :forum,
            semcelt = :semcelt, semef = :semef, semmurb = :semmurb, defesaCivil = :defesaCivil");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO fevereiro (semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
            procon, forum, semcelt, semef, semmurb, defesaCivil)
            VALUES (:semgov, :semus, :semas, :semed, :semsopc, :setrade, :gabineteDoPrefeito, :procon, :forum, :semcelt, :semef,
            :semmurb, :defesaCivil)");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        }
        
    }

    public function selectFevereiroImprensa() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, conteudos, clipings FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editFevereiroImprensa($conteudos,$clipings) {
        $sql = $this->pdo->prepare("SELECT * FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE fevereiro SET conteudos = :conteudos, clipings = :clipings");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO fevereiro (conteudos, clipings) VALUES(:conteudos, :clipings)");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        }
    } 

    public function selectFevereiroDesign() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, artes, impressoes FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    } 
    public function editFevereiroDesign($pecas, $impressoes) {
        $sql = $this->pdo->prepare("SELECT * FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE fevereiro SET artes = :pecas, impressoes = :impressoes");
            $sql->bindValue(":pecas", $pecas);
            $sql->bindValue(":impressoes", $impressoes);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO fevereiro (artes, impressoes) VALUES (:artes, :impressoes)");
            $sql->prepare(":artes", $pecas);
            $sql->prepare(":impressoes", $impressoes);
            $sql->execute();
        }
    }

    public function selectFevereiroFotografia() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, cobertura , material FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editFevereiroFotografia($cobertura, $material) {
        $sql = $this->pdo->prepare("SELECT * FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE fevereiro SET cobertura = :cobertura, material = :material");
            $sql->bindValue(":cobertura", $cobertura);
            $sql->bindValue(":material", $material);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO fevereiro (cobertura, material) VALUES (:cobertura, :material)");
            $sql->prepare(":cobertura", $cobertura);
            $sql->prepare(":material", $material);
            $sql->execute();
        }
    }
    
    public function selectFevereiroSocial() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, seguidores , alcance FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editFevereiroSocial($seguidores,$alcance) {
        $sql = $this->pdo->prepare("SELECT * FROM fevereiro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE fevereiro SET seguidores = :seguidores, alcance = :alcance");
            $sql->bindValue(":seguidores", $seguidores);
            $sql->bindValue(":alcance", $alcance);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO fevereiro (seguidores, alcance) VALUES (:seguidores, :alcance)");
            $sql->prepare(":seguidores", $seguidores);
            $sql->prepare(":alcance", $alcance);
            $sql->execute();
        }
    }

}


<?php

class Abril {

    private $pdo; 

    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }

    public function selectAbrilRequerimentos() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
        procon, forum, semcelt, semef, semmurb, defesaCivil FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editAbrilRequerimentos($arrayRequerimentos = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE abril SET  semgov = :semgov, semus = :semus, semas = :semas, semed = :semed, 
            semsopc = :semsopc, setrade = :setrade, gabineteDoPrefeito = :gabineteDoPrefeito, procon = :procon, forum = :forum,
            semcelt = :semcelt, semef = :semef, semmurb = :semmurb, defesaCivil = :defesaCivil");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO abril (semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
            procon, forum, semcelt, semef, semmurb, defesaCivil)
            VALUES (:semgov, :semus, :semas, :semed, :semsopc, :setrade, :gabineteDoPrefeito, :procon, :forum, :semcelt, :semef,
            :semmurb, :defesaCivil)");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        }
        
    }

    public function selectAbrilImprensa() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, conteudos, clipings FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editAbrilImprensa($conteudos = 0 , $clipings = 0) {  
        $sql = $this->pdo->prepare("SELECT * FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE abril SET conteudos = :conteudos, clipings = :clipings");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO abril (conteudos, clipings) VALUES(:conteudos, :clipings)");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        }
         
    } 

    public function selectAbrilDesign() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, artes, impressoes FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    } 
    public function editAbrilDesign($pecas = 0, $impressoes = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE abril SET artes = :pecas, impressoes = :impressoes");
            $sql->bindValue(":pecas", $pecas);
            $sql->bindValue(":impressoes", $impressoes);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO abril (artes, impressoes) VALUES (:artes, :impressoes)");
            $sql->prepare(":artes", $pecas);
            $sql->prepare(":impressoes", $impressoes);
            $sql->execute();
        }
    }

    public function selectAbrilFotografia() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, cobertura , material FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editAbrilFotografia($cobertura = 0, $material = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE abril SET cobertura = :cobertura, material = :material");
            $sql->bindValue(":cobertura", $cobertura);
            $sql->bindValue(":material", $material);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO abril (cobertura, material) VALUES (:cobertura, :material)");
            $sql->prepare(":cobertura", $cobertura);
            $sql->prepare(":material", $material);
            $sql->execute();
        }
    }
    
    public function selectAbrilSocial() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, seguidores , alcance FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editAbrilSocial($seguidores = 0,$alcance = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM abril");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE abril SET seguidores = :seguidores, alcance = :alcance");
            $sql->bindValue(":seguidores", $seguidores);
            $sql->bindValue(":alcance", $alcance);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO abril (seguidores, alcance) VALUES (:seguidores, :alcance)");
            $sql->prepare(":seguidores", $seguidores);
            $sql->prepare(":alcance", $alcance);
            $sql->execute();
        }
    }

}


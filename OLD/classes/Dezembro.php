<?php

class Dezembro {

    private $pdo; 

    public function __construct($pdoExterno) {
        $this->pdo = $pdoExterno;
    }

    public function selectDezembroRequerimentos() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
        procon, forum, semcelt, semef, semmurb, defesaCivil FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editDezembroRequerimentos($arrayRequerimentos = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE dezembro SET  semgov = :semgov, semus = :semus, semas = :semas, semed = :semed, 
            semsopc = :semsopc, setrade = :setrade, gabineteDoPrefeito = :gabineteDoPrefeito, procon = :procon, forum = :forum,
            semcelt = :semcelt, semef = :semef, semmurb = :semmurb, defesaCivil = :defesaCivil");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO dezembro (semgov, semus, semas, semed, semsopc, setrade, gabineteDoPrefeito,
            procon, forum, semcelt, semef, semmurb, defesaCivil)
            VALUES (:semgov, :semus, :semas, :semed, :semsopc, :setrade, :gabineteDoPrefeito, :procon, :forum, :semcelt, :semef,
            :semmurb, :defesaCivil)");

            foreach($arrayRequerimentos as $key => $value) {
                $sql->bindValue(":{$key}",$value);   
            }
            $sql->execute();
        }
        
    }

    public function selectDezembroImprensa() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, conteudos, clipings FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editDezembroImprensa($conteudos = 0 , $clipings = 0) {  
        $sql = $this->pdo->prepare("SELECT * FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE dezembro SET conteudos = :conteudos, clipings = :clipings");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO dezembro (conteudos, clipings) VALUES(:conteudos, :clipings)");
            $sql->bindValue(":conteudos", $conteudos);
            $sql->bindValue(":clipings", $clipings);
            $sql->execute();
        }
         
    } 

    public function selectDezembroDesign() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, artes, impressoes FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    } 
    public function editDezembroDesign($pecas = 0, $impressoes = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE dezembro SET artes = :pecas, impressoes = :impressoes");
            $sql->bindValue(":pecas", $pecas);
            $sql->bindValue(":impressoes", $impressoes);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO dezembro (artes, impressoes) VALUES (:artes, :impressoes)");
            $sql->prepare(":artes", $pecas);
            $sql->prepare(":impressoes", $impressoes);
            $sql->execute();
        }
    }

    public function selectDezembroFotografia() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, cobertura , material FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editDezembroFotografia($cobertura = 0, $material = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE dezembro SET cobertura = :cobertura, material = :material");
            $sql->bindValue(":cobertura", $cobertura);
            $sql->bindValue(":material", $material);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO dezembro (cobertura, material) VALUES (:cobertura, :material)");
            $sql->prepare(":cobertura", $cobertura);
            $sql->prepare(":material", $material);
            $sql->execute();
        }
    }
    
    public function selectDezembroSocial() {
        $sql = $this->pdo->prepare("SELECT id, id_usuario, seguidores , alcance FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
            return $dados;
        } else {
            return false;
        }
    }
    public function editDezembroSocial($seguidores = 0,$alcance = 0) {
        $sql = $this->pdo->prepare("SELECT * FROM dezembro");
        $sql->execute();
        if($sql->rowCount() > 0) {
            $sql = $this->pdo->prepare("UPDATE dezembro SET seguidores = :seguidores, alcance = :alcance");
            $sql->bindValue(":seguidores", $seguidores);
            $sql->bindValue(":alcance", $alcance);
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("INSERT INTO dezembro (seguidores, alcance) VALUES (:seguidores, :alcance)");
            $sql->prepare(":seguidores", $seguidores);
            $sql->prepare(":alcance", $alcance);
            $sql->execute();
        }
    }

}


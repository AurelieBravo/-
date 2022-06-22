<?php

// require "BDD.php";

class Livre extends Bdd
{

    public function getBooks()
    {
        // chercher un seul livre par l'id
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM livres 
                                INNER JOIN auteur ON livres.auteur_id = auteur.id");
        $livres = $req->fetchAll(PDO::FETCH_ASSOC);

        return $livres;
    }

    public function getBook($idLivre)
    {
        // chercher un seul livre par l'id
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM livres 
                                INNER JOIN auteur ON livres.fk_auteur = auteur.id
                                WHERE livres.id = " . $idLivre);
        $livre = $req->fetch(PDO::FETCH_ASSOC);

        return $livre;
    }
}

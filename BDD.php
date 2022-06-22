<?php
class Bdd
{
    protected function dbConnect()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=bibliothequephp', 'root', '');
            $bdd->exec("SET CHARACTER SET utf8");
            return $bdd;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

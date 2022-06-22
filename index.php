<?php
require 'header.php';
require 'Livre.php';
?>

<h2>livres</h2>

<form action="" method="post">
    <p>
        <img src="" alt="">
        Titre du Livres: <input type="text" name="titre" maxlength="50" /><b>
            Auteur: <input type="text" name="nom" maxlength="50" />
            Genre:
            <select class="form-control input-lg" name="titre">
                <div class="type">

                    <label for="genre" class="col-xs-12 col-sm-4 col-md-3 control-label">genre : </label>
                    <option value="horreur">horreur</option>
                    <option value="science fiction">science fiction</option>
                    <option value="histoire vrai">humour</option>
                    <option value="policier">policier</option>
            </select>

            <input type="submit" value="valider" name="valider" />
    </p>

    <hr />


    <?php

    $livre = new Livre();
    $tabLivres = $livre->getBooks();

    foreach ($tabLivres as $row) {
        // echo "<table><tr><th>titre</th><th>auteur</th><th>prix</th></tr>";
        // while ($row);
        //     echo "<tr>";
        //     echo "<td>" . $row[$titre] . "</td>";
        var_dump($row['titre']);
        var_dump($row['resume']);
        var_dump($row['prix']);
    }











    require 'footer.php'
    ?>
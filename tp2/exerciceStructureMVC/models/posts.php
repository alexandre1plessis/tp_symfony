<?php

require_once 'database.php';


/** Doit contenir les méthodes pour  traiter les postes.
 * Rappel : Le modèle fait appel à la base de données.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */

function getPosts(){
    $base = initDatabse();
    $query = "SELECT * FROM posts";
    $req = $base->query($query);

    return $req;
}
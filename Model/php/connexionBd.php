<?php

$host = 'localhost';
$dbname = 'cyberharcelement'; /*Mettre nom de la bd */
$dbuser = 'root'; /*Mettre nom utilisateur de la bd */
$dbpwd  = '';   /*Mettre pwd de la bd */

try {
    $db = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8', $dbuser, $dbpwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch(Exception $e) {
    echo $e->getMessage();
    die("ERREUR : Problème de connexion");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("USE $dbname");
}

?>
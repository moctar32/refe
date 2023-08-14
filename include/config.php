<?php

// Connexion à la base de données
try
{
$dbh = new PDO('mysql:host=localhost;dbname=ecole', "root", null);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
<?php
// connect BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// start session
session_start();

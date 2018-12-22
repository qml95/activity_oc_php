<?php
$db_config = array();
$db_config['DRIVER']        = 'mysql';
$db_config['HOST']          = 'localhost';
$db_config['DB_NAME']       = 'minichat';
$db_config['USER']          = 'root';
$db_config['PASSWORD']      = 'root';
$db_config['OPTIONS']       = array(
                                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
                                   );
try
{
    // connect BDD
    $bdd = new PDO($db_config['DRIVER'] .':host='. $db_config['HOST'] .';dbname='. $db_config['DB_NAME'],
                   $db_config['USER'],
                   $db_config['PASSWORD'],
                   $db_config['OPTIONS']
                   );
}
catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
    die();
}


// start session
session_start();

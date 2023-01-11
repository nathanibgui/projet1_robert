<?php

//connexion a la base de données
// dsn = Data Source Name = driver MYSQL
$dsn='mysql:dbname=canin;host=localhost';
//login
$login='root';
// Mot de passe
$motDePasse='';
// Connexion au serveur MySQL
try{
    $cnx = new PDO($dsn, $login, $motDePasse,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            if ($cnx) {
                //echo "connexion à la BDD reussie";
            }
}
catch (PDOException $e){
	die('Erreur : ' . $e->getMessage());
}

<?php
include ('cnx.php');

$query = $cnx->prepare("SELECT * from produits");
$query->execute();
$produit = $query ->fetchAll(PDO::FETCH_ASSOC);



?>
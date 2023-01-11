<?php
include ('cnx.php');

$query = $cnx->prepare("DELETE from panier");
$query->execute();
$produit_supp = $query ->fetchAll(PDO::FETCH_ASSOC);



?>
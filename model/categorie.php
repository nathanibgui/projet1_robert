<?php
include ('cnx.php');

$query = $cnx->prepare("SELECT * from produits where categorie = ?");
$query->execute(array($_GET['id']));
$categorie = $query->fetchAll(PDO::FETCH_ASSOC);


?>
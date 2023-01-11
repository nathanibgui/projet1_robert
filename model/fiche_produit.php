<?php
##ME permet de recuperer grace a l'id la fiche d'un produit seul
include ('cnx.php');

$query = $cnx->prepare("SELECT * FROM produits WHERE id = ?");
$query->execute(array($_GET['id']));
$prod = $query->fetchAll(PDO::FETCH_ASSOC);


?>
<?php
##ME permet de recuperer grace a l'id la fiche d'un produit seul
include ('cnx.php');

if(isset($_POST["envoyez"])):

    $query = "INSERT INTO panier (`id_produits`) VALUES (".$_GET['id'].")";
    $stmt  = $cnx->prepare($query);
    $stmt->execute();
endif;

    $query = $cnx->prepare("SELECT * FROM `panier`as a ,produits as b WHERE a.id_produits = b.id;");
    $query->execute();
    $panier = $query ->fetchAll(PDO::FETCH_ASSOC);

//var_dump($panier);exit;


?>
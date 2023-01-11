<?php
include ('../model/cnx.php');
include ('header.php');
include ('../model/fiche_produit.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/ficheProduit.css">
    <title>Produit</title>
</head>

<body>
<a class="btn btn-outline-primary " href="produits.php">Retour</a>
<?php
if(isset($_POST["envoyez"])):
    //var_dump($_GET['id']);exit;
    header('Location:produits.php');
endif;

foreach($prod as $p) {
    echo '<div class="row my-4">
    <div class="col-1"></div>
    <div class="col-11">
        <div class="row mb-2">
            <div class="col-6"><img src="../assets/brand/'.$p['img'].'" width="auto" height="480 px"></div>
            <div class="col-6 mt-4">
                <h1>'.$p['nom'].'</h1>
                <p class="text">'.$p['description'].'</p>
                <p class="text-right"> Prix : '.$p["prix"].',00 €</p>
                    <div class="flex-column">
                        <form method="post">
                            <div id="btn">
                                <input name="envoyez" type="submit" value="Ajouter au panier" class="btn btn-outline-primary">
                                <div style="text-align:justify-all;margin:5px 0;">
                                    <img src="https://p7635.phpnet.org/themes/inforiel/img/paiement-pictos.png">
                                </div>
                            </div>
                        </form>
                    </div>
            </div>';
}
?>
</body>
            <hr class="bg-primary my-4">
        </div>
        <section id="product_reassurance" class="hidden-sm">
            <div class="row">
                <div class="col-1"><img src="https://p7635.phpnet.org/themes/inforiel/img/Livraison-middle.png" alt=""></div>
                <div class="col-10">
                    <h4>Livraison</h4>
                    Sous 24h dans toute l'Europe
                </div>

                <div class="clearfix"></div>
                <div class="col-1"><img src="https://p7635.phpnet.org/themes/inforiel/img/Payement-middle.png" alt=""></div>
                <div class="col-10">
                    <h4>Paiement sécurisé</h4>

                    Payez en toute sécurité par CB, Paypal, Chèque, ou Virement
                </div>

                <div class="clearfix"></div>
                <div class="col-1"><img src="https://p7635.phpnet.org/themes/inforiel/img/port.png" alt=""></div>
                <div class="col-10">
                    <h4>Frais de port</h4>
                    Offerts dès 260 euros d'achats
                </div>
                <div class="clearfix"></div>
        </section>
    </div>
</div>



</html>
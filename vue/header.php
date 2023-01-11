<?php
include ('../model/panier.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Accueil</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<header>
<style>
    .notification-bubble {
        position: absolute;
        top: -6px;
        right: -6px;
        padding: 6px;
        border-radius: 50%;
        background-color: #1abc9c;
        color: white;
        font-size: 12px;
        font-weight: bold;
    }
    .empty {
        display: none;
    }

</style>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="../index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img srcset="//cdn.shopify.com/s/files/1/0575/8130/5956/files/th_250x.jpg?v=1648502285 1x, //cdn.shopify.com/s/files/1/0575/8130/5956/files/th_250x@2x.jpg?v=1648502285 2x" src="//cdn.shopify.com/s/files/1/0575/8130/5956/files/th_250x.jpg?v=1648502285" loading="lazy" class="header__heading-logo" width="80" height="80" alt="luniversduchienchat">            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="../index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li><a href="produits.php" class="nav-link px-2 link-dark">Notre catalogue</a></li>
                <li><a href="a_propos" class="nav-link px-2 link-dark">A propos</a></li>
                <li>
                    <a href="panier.php" class="nav-link px-2 link-dark" style="position: relative;">
                        Panier
                        <span class="num-count notification-bubble <?php if(!isset($panier) || count($panier) == 0) echo 'empty'?>" style="position: absolute; top: -20px; right: 0;">
        <?php
        if(isset($panier)):
            echo count($panier);
        else:
            echo '0';
        endif;
        ?>
    </span>
                    </a>
                </li>


            </ul>
            <div class="col-md-3 text-end">
            </div>

        </header>
    </div>
</header>
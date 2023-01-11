<?php
include ('model/cnx.php');
include ('model/panier.php');
session_start();
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
    <link rel="stylesheet" href="assets/dist/css/index.css">

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
            <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img srcset="//cdn.shopify.com/s/files/1/0575/8130/5956/files/th_250x.jpg?v=1648502285 1x, //cdn.shopify.com/s/files/1/0575/8130/5956/files/th_250x@2x.jpg?v=1648502285 2x" src="//cdn.shopify.com/s/files/1/0575/8130/5956/files/th_250x.jpg?v=1648502285" loading="lazy" class="header__heading-logo" width="80" height="80" alt="luniversduchienchat">            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
                <li><a href="vue/produits.php" class="nav-link px-2 link-dark">Notre catalogue</a></li>
                <li><a href="vue/a_propos" class="nav-link px-2 link-dark">A propos</a></li>
                <li>
                    <a href="vue/panier.php" class="nav-link px-2 link-dark" style="position: relative;">
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
                <?php
                if(isset($_SESSION['validate']) && $_SESSION['validate']==1):
                    echo 'Bienvenue  '.$_SESSION["mail"];
                    echo '<button type="button" class="btn btn-outline-primary me-2"><a href="model/deconnexion.php">Deconnexion</a></button>';
                else:
                    echo '<button type="button"  class="btn btn-outline-primary me-2"><a href="vue/connexion.php">Se connecter</a></button>
                        <button type="button" class="btn btn-outline-primary me-1"><a href="vue/inscription.php">Inscription</a></button>';
                endif;      ?>

            </div>
        </header>
<body>

<main>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/brand/hiver_chien.jpg" class="d-block w-80 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/brand/accueilbaniere2" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/brand/plage_chien.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div></div>

    <div class="container marketing">
        <p></p>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">DOGS ACCESS<span class="text-muted"> est le site de référence canine.</span></h2>
                <p class="lead">Crée dans une salle de classe lors d'un hiver assée rude. DOGS ACCESS a sû s'imposer comme un leader du marché canin.<br><br>
                    Ces prix avantageux et son large catalogue de produits vous permetrons d'accompagner et de rendre heureux.se votre petite boule de poil.<br>
                    Certifié et réglementé nos produits sont controllés et testé en laboratoire avant de vous les être proposé.</p>
            </div>
            <div class="col-md-5">
                <img src="assets/brand/chein%20rond%201.jpg" class="rounded-circle img-fluid">            </div>
        </div>

        <p></p>
        <div class="align-content-center">
            <?php include 'vue/carous_avance.html';?>
        </div>
        <p></p>

        <p></p>
        <div class="align-content-center">
            <?php include 'vue/categorie_apprecie.html' ;?>
        </div>
        <p></p>

        <!--  FINNNNN !-->
        <hr class="featurette-divider">

        <h2>Nos <b>boules de poils</b> testeurs de produits </h2>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <img src="assets/brand/chein%20rond%201.jpg" class="rounded-circle img-fluid">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <img src="assets/brand/sanhco.jpg" class="rounded-circle img-fluid">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <img src="assets/brand/chein%20rond%201.jpg" class="rounded-circle img-fluid"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
            </div>
            <p></p>
        </div>



    </div>


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">En haut</a></p>
        <p>&copy; 2022 Ibgui Nathan, Inc. &middot; Privée</p>
    </footer>
</main>

</body>
</html>

<?php

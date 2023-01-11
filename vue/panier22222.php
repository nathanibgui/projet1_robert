<?php
include ('header.php');
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
    <title>Panier</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>

<body>
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Panier en cours</h3>

                    <?php

                    foreach ($panier as $p){

                        //var_dump($p);exit;

                            echo '<div class="col">
                        <a href="fiche_produit.php?id='.$p['id'].'">
            <div class="card h-100">
              <img src="../assets/brand/'.$p['img'].'" class="img-thumbnail" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title">'.$p['nom'].'</h5>
                <h4 class="card-title">'.$p['prix'].' €</h4>
                <p class="card-text">'.$p['description'].'</p>
              </div>
              <div class="card-footer">
           
                <small class="text-muted">'.$p['categorie'].'</small>
              </div>
            </div>
          </div>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>

               3
</section>
</body>
</html>
<?php

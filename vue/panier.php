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
    <script>
        #prixTot
        {
            font-size: 16px;
            font-weight: bold;
            float: right;
            margin-right: 20%;
        }
    </script>
</head>

<body>
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <?php
                if($panier):
                    echo'
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Panier en cours</h3>

                </div>';

                else:
                    echo '<h4 class="fw-normal mb-0 text-black">Votre panier est vide pour le moment</h4>';
                endif;
                ?>

<?php

if(isset($_POST['envoyez2'])):
    include ('../model/success.php');
   ?>
    <script>document.location.href="success.php"</script>
<?php
endif;

            $tot = 0;
            foreach ($panier as $p){
                $tot = $tot + $p['prix'];

                echo '<div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                    src="../assets/brand/'.$p['img'].'"
                                    class="img-fluid rounded-3" alt="JOUETS">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">'.$p['nom'].'</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                    <i class="fas fa-minus"></i>
                                </button>


                                <button class="btn btn-link px-2"
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0">'.$p['prix'].' €</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';

                } ?>

                <div class="col-md-6 col-lg-3 col-xl-3">
                    <h5 class="col 5 lead fw-normal mb-2 ">Total: <?php echo $tot ?>€</h5>
                </div>



                <div class="card">
                    <form method="post">
                        <div class="card-body">
                            <button type="submit" class="btn btn-warning btn-block btn-lg" name="envoyez2" >Continuer et payer</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
</body>
</html>
<?php

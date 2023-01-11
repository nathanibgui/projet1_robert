<?php  
include ('../model/cnx.php');
include ('header.php');
include ('../model/produit.php');


//var_dump($produit);exit;
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/produits.css">
    <title>Produits</title>

    <?php
        if(isset($_POST['btnRecherchez']) && $_POST['categories']):
            $cat = $_POST['categories'];

            header("Location:categorie.php?id=$cat");
        endif;
    ?>
    <style>
        .form-label {
            font-weight: bold;
        }

        .select {
            display: flex;
            align-items: center;
        }

        .select__input {
            width: 20%;
            border: 1px solid #333;
            padding: 8px;
        }

        .btn {
            display: inline-block;
            font-weight: bold;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            line-height: 1.25;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }


        .form_css{
            margin-left: 1%;

        }
    </style>

    <div class="form_css">
    <form method="post">
        <label class="form-label" for="src">Catégories</label>
        <div class="select">
            <select class="select__input form-control width-50%" name="categories">
                <option value="">Toutes</option>
                <option value="1">Panier</option>
                <option value="4">Nourriture</option>
                <option value="5">Accessoire</option>
                <option value="6">Soin</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="btnRecherchez">Recherchez</button>
    </form>

        <br>
        <br>
        <h1>Nos produits</h1>
        <br>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach($produit as $p) {
                echo '<div class="col">
              <a href="fiche_produit.php?id='.$p['id'].'">
        <div class="card h-100">
          <img src="../assets/brand/'.$p['img'].'" class="img-thumbnail" alt="..."></a>
          <div class="card-body">
            <h5 class="card-title">'.$p['nom'].'</h5>
            <h4 class="card-title">'.$p['prix'].' €</h4>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>';
            }
            ?>
        </div>

    </div>

</head>
<body>


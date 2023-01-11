<?php  
include ('../model/cnx.php');
include ('header.php');
include ('../model/categorie.php');


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
    elseif(isset($_POST['btnRecherchez']) &&  !$_POST['categories']):
        header("Location:produits.php");
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

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }
        .form_css{
            margin-left: 1%;

        }
        .form2{
           margin-bottom: 20px;

        }

        .btnR{
            margin-bottom: 20px;
        }
    </style>

    <div class="form_css">

     <div class="form2">

    <form method="post">
        <div class="col-6 col-2@md">
            <label class="form-label margin-bottom-xxxs" for="src">Catégories</label>
            <div class="select">
                <select class="select__input form-control width-20%" name="categories">
                    <option value="">Toutes</option>
                    <option value="1">Panier</option>
                    <option value="4">Nourriture</option>
                    <option value="5">Accessoire</option>
                    <option value="6">Soin</option>
                </select>
            </div>
        </div>
        <br>

            <button type="submit" class="btn btn-primary btnR" name="btnRecherchez">Recherchez</button>

    </form>
     </div>

        <style>
            .card {
                width: 100%;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            .card img {
                width: 100%;
                height: auto;
                border-radius: 8px 8px 0 0;
            }

            .card h5 {
                font-weight: bold;
                margin-top: 0.5rem;
            }

            .card h4 {
                font-weight: bold;
                margin-top: 0.5rem;
            }

            .card p {
                font-size: 0.9rem;
                margin: 0;
            }

            .card-footer {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0.5rem 1rem;
                background-color: #f5f5f5;
                border-radius: 0 0 8px 8px;
            }
        </style>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach($categorie as $p) {
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
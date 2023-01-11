<?php

class Produits
{
    function add($title,$des,$date_aj,$idc,$picture,$prix)
    {
        $cnx = cnx_bdd();
        $requete = "INSERT INTO produits (nom,`description`,categorie,img,prix) VALUES ('".$title."','".$des."','".$date_aj."',$idc,'".$picture."','".$prix."');";
        $ok=$cnx->query($requete);
    }



    function liste_all()
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from produits; ";
        // echo $requete;
        $jeuResultat=$cnx->query($requete);
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['nom']=$ligne['nom'];
            $info[$i]['description']=$ligne['description'];
            $info[$i]['img']=$ligne['img'];
            $info[$i]['prix']=$ligne['prix'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();
        return $info;

    }


    function liste_one($id)
    {
        $cnx = cnx_bdd();
        $requete="SELECT * from Articles where id = $id; ";

        // echo $requete;
        $jeuResultat=$cnx->query($requete);
        $i = 0;
        $ligne = $jeuResultat->fetch();
        while($ligne)
        {
            $info[$i]['id']=$ligne['id'];
            $info[$i]['nom']=$ligne['nom'];
            $info[$i]['description']=$ligne['description'];
            $info[$i]['img']=$ligne['img'];
            $info[$i]['prix']=$ligne['prix'];
            $info[$i]['cat']=$ligne['categorie'];
            $ligne=$jeuResultat->fetch();
            $i = $i + 1;
        }
        $jeuResultat->closeCursor();
        return $info;
    }




}
?>

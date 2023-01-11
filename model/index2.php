<?php 
session_start();
include ('C:\wamp64\www\projet1_robert\model\cnx.php');

if (isset ($_POST['btnConnexion']))
{
  if(empty($_POST['txtMail']) || empty($_POST['txtMdp']))
  {
    echo "Veuillez renseigner les champs";
  }
  else
  {
    $query= "INSERT INTO user (`id_user`, `nom_user`, `prenom_user`, `login`, `pass`) VALUES (NULL, :nom, :prenom, :login, :pass)";

    $stmt= $cnx ->prepare($query);
    $stmt->execute(
      array(
          'nom'    => $_POST["nom"],
          'prenom' => $_POST["prenom"],
          'login'  => $_POST["txtMail"],
          'pass'   => $_POST["txtMdp"]
      )
      );

      $count = $stmt ->rowCount();
      if($count > 0)
      {
        $_SESSION["mail"]=$_POST["txtMail"];
        header("Location: ../model/all.php");
      }
      else
      {
        echo "identifiants invalides";
      }
  }
}
?>

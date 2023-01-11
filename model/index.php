<?php 
session_start();
include ('C:\wamp64\www\projet1_robert\model\cnx.php');

if (isset ($_POST['btnConnexion']))
{
  if(empty($_POST['txtMail']) || empty($_POST['txtMdp']))
  {
    echo "veuillez renseigner les champs";
  }
  else
  {
    $query= "SELECT login,pass FROM user WHERE login = :login AND pass = :pass";
    $stmt= $cnx ->prepare($query);
    $stmt->execute(
      array(
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

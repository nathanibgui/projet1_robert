<?php
include ('cnx.php');
session_start();
if(isset($_SESSION["mail"]))
{
    header("Location: ../index.php");
    $_SESSION["validate"] = 1;
    echo '<h3>Bienvenue  '.$_SESSION["mail"].'</h3>';
    echo '<br><br>';
}


$sql =  'SELECT * FROM user ORDER BY nom_user';
foreach  ($cnx->query($sql) as $row) {
    print $row['id_user'] . "\n";
    print $row['nom_user'] . "\n";
    print $row['prenom_user'] . "\n";
    print $row['login'] . "\n";
    print $row['pass'] . "<br>";
}

?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'connex.php';
  if(isset($_POST['valider'])){
    $firstname=htmlspecialchars($_POST['inputfirstname']);
    $lastname=htmlspecialchars($_POST['inputlastname']);
    $instagram=htmlspecialchars($_POST['inputinstagram']);
    $class=$_POST['exampleFormControlSelect1'];

    $resultat = $bdd->prepare('INSERT INTO class_db_V2 (firstname, lastname, instagram, classe, current_datetime) VALUES (?,?,?,?,NOW() )');
    $resultat->execute(array($firstname, $lastname, $instagram, $class));

    header("refresh:2;url=classes.php?w=$class");
    echo "Votre requête a été enregsitré !";
  }
  else {
    header("refresh:2;url=register.php");
    echo "La requête n'a pas été enregistré.";
  }
?>

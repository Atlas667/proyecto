<?php
  
  if(!($loggedIn)){
    header("Location: http://sici4997.uprp.edu/~josue.nadal/proyecto/index.php");
  }

  $user = $_SESSION["username"];
  $estrellas = $_POST["estrellas"];
  $comment = $_POST["comment"];
  
  array_push($comments, ["user" => $user, "estrellas" => $estrellas, "comment" => $comment]);

  header("Location: ../index.php?p=Contactanos");
?>


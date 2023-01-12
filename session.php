<?php 
  session_start();   // PHP session starten
      
  $_SESSION["favoriteAnimal"] = $_POST["favoriteAnimal"];

  print $_SESSION["favoriteAnimal"];

  print "<pre>";
  print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
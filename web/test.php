<?php

  $mysqli = new mysqli("localhost","root","lagoranco1809","guia_maestra_desa");

  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  if ($result = $mysqli->query("SELECT ImagenMini FROM paginas")) 
  {
    while($obj = $result->fetch_object())
    {
      $ImagenMini = $obj->ImagenMini;

      header('Content-Type: image/jpeg');

      echo $ImagenMini;

    }
  } 
?>
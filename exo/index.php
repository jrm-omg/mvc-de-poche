<?php

  /*

  route

  */

  parse_str($_SERVER["QUERY_STRING"], $qs); // récupère les "query string" et les range en tableau
  $keys = array_keys($qs); // extrait le nom des clés du tableau
  $route = array_shift($keys); // extrait le nom de la première clé
  switch ($route) {

    case "hello":
      include("controller/ctrl.hello.php");
      break;

    default:
      include("controller/ctrl.default.php");
      break;

  }

  /*

  EOF
  
  */

  exit;
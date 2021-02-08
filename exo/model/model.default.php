<?php

  // salut moi je suis un modèle
  // mon rôle c'est d'aller à la pèche à l'info

  // en général je contiens tout ce qu'il faut pour se connecter et CRUD une base de données
  
  // mais là je vais juste récupérer la date du jour

  setlocale(LC_ALL, "fr_FR.UTF-8");
  $info = strftime("%A %d %B %Y, %H:%M:%S");
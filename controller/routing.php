<?php
      $var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
      echo "<br>";
      switch ($var_getMenu) {
      case "inicio":
      require_once ('./views/home.php');
      break;
      case "acercade":
      require_once('./views/acercade.php');
      break;
      case "login":
      require_once('./views/login.php');
      break;
      case "registro":
      require_once('./views/registro.php');
      break;
      default:
      require_once('./views/home.php');
      }


?>
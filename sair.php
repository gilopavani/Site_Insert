<?php
   session_start();
   unset($_SESSION["usuario"]);
   unset($_SESSION["senha"]);
   
   echo 'You have cleaned session';
   header('Refresh: 0; URL = index.php');
?>
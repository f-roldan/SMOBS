<?php
  session_start();
  session_destroy();
  //set_cookie("usuarioEmail", null, time() - 1);
  //set_cookie("usuarioPassword", null, time() - 1);
  header("Location: login.php");exit;
   ?>

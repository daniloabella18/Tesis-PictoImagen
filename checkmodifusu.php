<?php

  header('Content-Type: text/html; charset=utf-8');
  session_start();
  //--------------------/ Actualizar /-------------------------------------------------------------------------------
  include 'connection.php';

  $usu = $_POST['usuario'];
  $password = $_POST['contra'];
  $tip = $_POST['tipo'];

  $q = "UPDATE usuario SET Usu_contra = '".$password."', Usu_Tus_cod = '".$tip."' WHERE Usu_id = '".$usu."'";
  if (mysqli_query($conn, $q)) {
    echo "<script>alert('Usuario: ".$usu." modificado!')</script>";
  } else {
    echo "<script>alert('Usuario ".$usu." NO modificado!')</script>";
  }

  mysqli_close($conn);
?>

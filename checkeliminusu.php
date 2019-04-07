<?php
  session_start();

  include 'connection.php';

  $usu = $_POST['usuario'];

  if ($usu != $_SESSION["usuario"]) {
//--------------------/ Eliminar historial /-------------------------------------------------------------------------------
      $q = "DELETE FROM historial WHERE His_Usu_id = '".$usu."'";
      if (mysqli_query($conn, $q)) {
        echo "<script>alert('Historial de ".$usu." eliminado')</script>";
      } else {
        echo "<script>alert('Historial de ".$usu." NO eliminado')</script>";
      }
//--------------------/ Eliminar usuario /-------------------------------------------------------------------------------
    $q = "DELETE FROM usuario WHERE Usu_id = '".$usu."'";
    if (mysqli_query($conn, $q)) {
      echo "<script>alert('".$usu." eliminado')</script>";
    } else {
      echo "<script>alert('".$usu." NO eliminado')</script>";
    }
  }
  else {
    echo "<script>alert('No puede eliminar el usuario: ".$usu." con el que está logeado!')</script>";
  }
  mysqli_close($conn);
?>

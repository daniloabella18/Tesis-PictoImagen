<?php

  session_start();
  //--------------------/ Verificar que no exista /-------------------------------------------------------------------------------
  include 'connection.php';

  $count_fila = 0;
  $usu = $_POST['usuario'];
  $password = $_POST['contra'];
  $q = "SELECT Usu_id, Usu_contra from usuario WHERE usu_id LIKE '{$usu}' AND Usu_contra LIKE '{$password}' LIMIT 1";
  $rs = mysqli_query($conn,$q);
  while ($row = mysqli_fetch_array($rs)) {
    $count_fila = $count_fila + 1;
  }

  mysqli_close($conn);
  //--------------------/ Ingresar /-------------------------------------------------------------------------------
  include 'connection.php';

  $usu = $_POST['usuario'];
  $password = $_POST['contra'];
  $tip = $_POST['tipo'];

  if ($count_fila == 0) {
    $q = "INSERT INTO usuario (Usu_id, Usu_contra, Usu_Tus_cod) VALUES ('".$usu."', '".$password."', '".$tip."')";
    if (mysqli_query($conn, $q)) {
      echo "<script>alert('Usuario creado!')</script>";
    } else {
      echo "<script>alert('Se presentó un problema en la creación de usuario, verifique que el usuario ingresado no exista.')</script>";
    //  echo "Error: " . $q . "<br>" . mysqli_error($conn);
    }
  }
  else{
    echo "<script>alert('El usuario ingresado ya existe!')</script>";
  }

  mysqli_close($conn);
?>

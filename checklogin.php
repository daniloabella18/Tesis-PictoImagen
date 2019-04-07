<?php

  header('Content-Type: text/html; charset=utf-8');
  session_start();

  include 'connection.php';

  $count_fila = 0;
  $usu = $_POST['usuario'];
  $password = $_POST['contraseña'];
  $tipo = "";
  $q = "SELECT Usu_id, Usu_contra, Usu_Tus_cod from usuario WHERE usu_id LIKE '{$usu}' AND Usu_contra LIKE '{$password}' LIMIT 1";
  $rs = mysqli_query($conn,$q);
  while ($row = mysqli_fetch_array($rs)) {
    $count_fila = $count_fila + 1;
    $tipo = $row['Usu_Tus_cod'];
  }

  if ($count_fila > 0) {
    $_SESSION["loggedin"] = true;
    $_SESSION["usuario"] = $usu;
    $_SESSION["tipo"] = $tipo;
    $_SESSION["start"] = time();
    $_SESSION["expire"] = $_SESSION['start'] + (5 * 60);
    echo $_SESSION['usuario'];
    header('Location: checklogin2.php');
  } else {
    echo "Usuario o Contraseña estan incorrectos.";
    header('Location: login.php');
  }

  mysqli_close($conn);
?>

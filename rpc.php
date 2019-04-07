<?php

  session_start();
  include 'connection.php';

  // Fecha y Hora
  date_default_timezone_set('America/Santiago');
  $timezone = date_default_timezone_get();
  echo "The current server timezone is: " . $timezone;
  echo "<br>";
  // Then call the date functions
  $date = date('Y-m-d H:i:s');
  echo "The current timezone is: " . $date;
  echo "<br>";
  // Or
  //$date2 = date('Y/m/d H:i:s');
  //echo "The current timezone is: " . $date;

  switch($_REQUEST['action']) {
    case '1':

      $sql = "INSERT INTO historial (His_Cua_cod, His_Cua_Act_Cod, His_Usu_id, His_Fecha) VALUES (1,'".$_REQUEST['act']."','".$_SESSION["usuario"]."','".$date."')";
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    break;
    case '2':

      $sql = "INSERT INTO historial (His_Cua_cod, His_Cua_Act_Cod, His_Usu_id, His_Fecha) VALUES (2,'".$_REQUEST['act']."','".$_SESSION["usuario"]."','".$date."')";
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    break;
    case '3':

      $sql = "INSERT INTO historial (His_Cua_cod, His_Cua_Act_Cod, His_Usu_id, His_Fecha) VALUES (3,'".$_REQUEST['act']."','".$_SESSION["usuario"]."','".$date."')";
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    break;
    case '4':

      $sql = "INSERT INTO historial (His_Cua_cod, His_Cua_Act_Cod, His_Usu_id, His_Fecha) VALUES (4,'".$_REQUEST['act']."','".$_SESSION["usuario"]."','".$date."')";
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    break;

  }
?>

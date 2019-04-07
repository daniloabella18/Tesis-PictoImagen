<?php
  session_start();
  // Echo session variables that were set on previous page
  if(!isset($_SESSION["loggedin"])) {
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PictoImagen Tema</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <!-- Theme color -->
    <link id="switcher" href="assets\css\theme-color\green-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='assets\css\sans\family.Cabin.css' rel='stylesheet' type='text/css'>
    <!-- Cabin for Title -->
    <link href='assets\css\sans\family.Open.Sans.css' rel='stylesheet' type='text/css'>
    <!-- Pacifico for Logo   -->
    <link href='assets\css\sans\family.Pacifico.css' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .fa-backward {
      position: absolute;
      left: 11%;
      top: 3%;
      font-size: 280%;
      z-index: 3;
    }
    button {
    background-color: #4CAF50;
    border: none;
    color: black;
    padding: 7px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
    button:hover {
    color: #00204A;
    }
    </style>
  </head>
  <body>

  <!-- Audios -->
  <audio id="Onomatopeya">
    <source src="assets/sonidos/lion1.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
  </audio>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <form method="post" action="tema.php">
    <?php
      include 'connection.php';
// Boton de Retroceso -------------------------------------------------------------------------------------------------------

      $tema = $_POST["tema"];
      echo "<p>".$tema."</p>";
      $q = "SELECT Tem_cod FROM tematica, tema WHERE Tea_cod = '".$tema."' and Tea_Tem_cod = Tem_cod GROUP BY Tem_cod";
      $rs = mysqli_query($conn,$q);
      while ($row = mysqli_fetch_array($rs)) {
        echo "<input type=hidden name=tematica value=".$row['Tem_cod'].">";
      }
// ------------------------------------------------------------------------------------------------------------------------
    ?>
    <button class="fa fa-backward" type="submit"></button>
  </form>

  <!-- start pricing table -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInLeft">
            <h2 class="title">Elige una <span>Actividad</span></h2>
          </div>
        </div>

        <?php
        echo "<div class=col-md-12>";
          echo "<div class=pricing-table-content>";
            echo "<div class=row>";

            $tema = $_POST["tema"];
            $a = 0.5;
            $q = "SELECT Act_cod,Tac_nom,Tac_url,Tac_Img_cod,Img_url FROM actividad , tipoactividad , imagen WHERE Act_Tea_Cod = '".$tema."' and Act_Tac_cod = Tac_cod and Tac_Img_cod = Img_cod ORDER BY Act_cod";
            $rs = mysqli_query($conn,$q);
            while ($row = mysqli_fetch_array($rs)) {
              echo "<div class='col-md-3 col-sm-3 col-xs-6'>";
                echo "<div class='single-plan wow fadeInUp' data-wow-duration=".$a."s data-wow-delay=".$a."s>";
                  echo "<form method=post action=".$row['Tac_url'].">";
                    echo "<div class=single-plan-head><h6>".$row['Tac_nom']."</h6></div>";
                    echo "<input type=hidden name=actividad value=".$row['Act_cod'].">";
                    echo "<input type=image src=".$row['Img_url']." style=width:100%; alt=app screenshot Submit>";
                  echo "</form>";
                echo "</div>";
              echo "</div>";

              $a = $a + 0.25;
            }
            echo "</div>";
          echo "</div>";
        echo "</div>";
        ?>

      </div>
    </div>
  </section>
  <!-- End pricing table -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="col-md-12"></div>
  </footer>
  <!-- End -->


  <!-- jQuery library -->
  <script src="assets\js\jQuery-library\1.11.3.jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script>
  <!-- Off-canvas Menu -->
  <script src="assets/js/classie.js"></script>

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>

  <!-- Sonidos js -->
  <script type="text/javascript" src="assets\js\sonidos.js"></script>

  </body>
</html>

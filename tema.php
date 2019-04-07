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
    <link id="switcher" href="assets/css/theme-color/orange-theme.css" rel="stylesheet">

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

  <a href="tematica.php"><i id="uit" class="fa fa-backward"></i></a>

  <!-- start pricing table -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInLeft">
            <h2 class="title">Elige un <span>Animal</span></h2>
          </div>
        </div>
        <div class=col-md-12>
          <div class=pricing-table-content>
            <div class=row>

              <?php
                include 'connection.php';
                session_start();
                $tematica = $_POST["tematica"];
                $a = 0.5;
                $q = "SELECT Tea_cod,Tea_nom,Img_url FROM tema,imagen WHERE Tea_Tem_Cod = '".$tematica."' and Tea_Img_cod = Img_cod";
                $rs = mysqli_query($conn,$q);
                while ($row = mysqli_fetch_array($rs)) {
                  echo "<div class='col-md-3 col-sm-3 col-xs-4' onclick=playOnomatopeya()>";
                    echo "<div class='single-plan wow fadeInUp' data-wow-duration=".$a."s data-wow-delay=".$a."s>";
                      echo "<form method=post action=actividad.php>";
                        echo "<div class='single-plan-head'><h6>".$row['Tea_nom']."</h6></div>";
                        echo "<input type=hidden name=tema value=".$row['Tea_cod'].">"; //Envía la Tema
                        echo "<input type=image src=".$row['Img_url']." style=width:100%; alt=app screenshot Submit>"; // Muestra la Img del Tema
                      echo "</form>";
                    echo "</div>";
                  echo "</div>";

                  $a = $a + 0.25;
                }

                $tem = 0;
                for ($tem; $tem<6; $tem++) {
                  echo "<div class='col-md-3 col-sm-3 col-xs-4' onclick=playOnomatopeya()>";
                    echo "<div class='single-plan wow fadeInUp' data-wow-duration=".$a."s data-wow-delay=".$a."s>";
                        echo "<div class='single-plan-head'><h6>Cerrado</h6></div>";
                        echo "<input type=image src=assets/images/Tematica/Animales/Cerrado.png style=width:100%;>";
                    echo "</div>";
                  echo "</div>";

                  $a = $a + 0.25;
              }
              ?>

            </div>
          </div>
        </div>
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

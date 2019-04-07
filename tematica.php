<?php
  session_start();
  // Echo session variables that were set on previous page
  if(!isset($_SESSION["loggedin"])) {
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>App Landy : Home</title>
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
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

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
      color: #FFFFFF;
      position: absolute;
      left: 11%;
      top: 3%;
      font-size: 280%;
      z-index: 3;
    }
    .fa-backward:hover {
      color: #03A9F4;
    }
    </style>
  </head>
  <body>

  <!-- Audios -->
  <iframe src="assets/sonidos/silence.mp3" allow="autoplay" style="display:none"></iframe>
  <audio autoplay>
    <source src="assets/sonidos/silence.mp3" type="audio/mpeg">
  </audio>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <a href="index.php"><i id="uit" class="fa fa-backward"></i></a>

  <!-- Start screenshot -->
  <section id="screenshot">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInUp">
            <h2 class="title">Elige una <span>Tematica</span></h2>
          </div>
        </div>

          <?php
            include 'connection.php';
            echo "<div class=col-md-12>";
              echo "<div class=screenshots-area>";
                echo "<ul class=screenshots-slide>";

                  $tem = 0;
                  for ($tem; $tem<2; $tem++) {
                    echo "<li class='col-md-3 wow fadeInLeft'>";
                      echo "<form action=tema.php>";
                        echo "<img src=assets\images\Tematica\Animales\Cerrada.png style=width:100%; alt=app screenshot>";
                      echo "</form>";
                   echo "</li>";
                  }


                  $q = "SELECT Tem_cod,Img_url FROM tematica,imagen WHERE Tem_Img_cod = Img_cod";
                  $rs = mysqli_query($conn,$q);
                  while ($row = mysqli_fetch_array($rs)) {
                    echo "<li class='col-md-3 wow fadeInLeft'>";
                      echo "<form method=post action=tema.php>";
                        echo "<input type=hidden name=tematica value=".$row['Tem_cod'].">"; //Envía la Tematica
                        echo "<input type=image src=".$row['Img_url']." style=width:100%; alt=app screenshot Submit>"; // Muestra la Img de la Temática
                      echo "</form>";
                    echo "</li>";
                  }

                  echo "</ul>";
                echo "</div>";
            echo "</div>";
          ?>

      </div>
    </div>
  </section>
  <!-- End screenshot -->

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

  </body>
</html>

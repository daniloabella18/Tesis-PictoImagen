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
      #uit {
        position: fixed;
        left: 11%;
        top: 3%;
        font-size: 280%;
        z-index: 11;
        text-align: center;
        color: #FFFFFF;
      }
      #uit:hover {
      opacity: 0.6;
      }
    </style>
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <a id="uit" href="login.php"><i class="fa fa-backward"></i></a>

  <!-- Start header section -->
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <img src="assets/images/header-bg.jpg" alt="img">
      <div class="overlay">
        <div class="header-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="header-top">
                  <!-- Start logo area -->
                  <div class="logo-area">
                    <!-- Image based logo -->
                    <!--<a class="logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a>-->
                    <!-- Text based logo -->
                    <!-- <a class="logo" href="index.html">App Landy.</a> -->
                  </div>
                  <!-- End logo area -->
                </div>
              </div>
              <div class="col-md-12">
                <div class="header-bottom">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="header-bottom-left">
                      <center><big><h1>PictoImagen</h1></big></center>
                      <center><p>Interfaz Humano Computador para el desarrollo cognitivo de personas con Trastrono del Espectro Autista (TEA)</p></center>
                      <?php
                        // Echo session variables that were set on previous page
                        echo "<center><p>Bienvenido ".$_SESSION["usuario"]."!</p></center><br>";
                      ?>
                      <a class="download-btn" href="tematica.php">JUGAR</a>
                      <a class="download-btn" href="reportes.php">REPORTES</a>
                      <a class="download-btn" href="gesusuario.php">GESTIÓN USUARIOS</a>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="col-md-6 col-sm-6">
                      <a href="tematica.php"><div class="header-bottom-right"><img src="assets\images\Index\Header.png" alt="website template image"></div></a>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start download app -->
  <section id="download-app">
    <div class="download-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area wow fadeInUp">
              <h2 class="title">Sobre la <span>APP</span></h2>
              <p>PictoImagen es el resultado de un trabajo de tesis de pregrado desarrollado por Danilo Abellá junto a su porfesor guía Rene A.Arancibia en la Universidad de Santiago de Chile, para el título de Analista en Ciencias de la Computación.</p>
            </div>
          </div>
          <!-- Start download app content -->
          <div class="col-md-12">
            <div class="download-app-content">
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" href="https://www.usach.cl/">
                <div class="download-icon">
                  <i class="fa fa-university"></i>
                </div>
                <div class="download-content">
                  <p>Universidad de Santiago de Chile</p>
                  <span>USACH</span>
                </div>
              </a>
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.75s" href="http://lcc.usach.cl/">
                <div class="download-icon">
                  <i class="fa fa-laptop"></i>
                </div>
                <div class="download-content">
                  <p>Lic. en Ciencias de la Computación</p>
                  <span>LCC</span>
                </div>
              </a>
              <!-- Start single download -->
              <a class="single-download wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s" href="assets\tesis\EscritoFinalv17.pdf">
                <div class="download-icon">
                  <i class="fa fa-book"></i>
                </div>
                <div class="download-content">
                  <p>Tésis</p>
                  <span>PDF</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End download app -->

  <!-- Start contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
              <h2 class="title">Mi <span>Contacto</span></h2>
              <p>Para cualquier duda o consulta mandame un correo.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-area">
            <form class="contact-form" action="mailto:daniloabella@gmail.com" method="post" enctype="text/plain">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
              </div>
              <div class="send-area">
                <button type="submit" class="send-btn">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact -->

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

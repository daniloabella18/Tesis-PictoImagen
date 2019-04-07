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
        html, body {
          height: 100%;
        }
        #siguiente {
        display: none;
        background-color: #3FC35F;
        opacity: 0.9;
        }
        #siguiente:hover {
        opacity: 1;
        }
        .btn {
            position: absolute;
            cursor: pointer;
            left: 0%;
            top: 0%;
            width: 100%;
            height: 90%;
            -webkit-transition: 2s; /* For Safari 3.1 to 6.0 */
            transition: 2s;
        }
        .cambiado { opacity: 0; }

        #cuadro{ background-color: #3FC35F;}
        .fa-play {
          font-size:700%;
          color:#007612;
          text-shadow:2px 2px 4px #000000;
          -webkit-animation-name: siganim; /* Safari 4.0 - 8.0 */
          -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
          -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
          animation-name: siganim;
          animation-duration: 4s;
          animation-iteration-count: infinite;
        }

        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes siganim {
          0%   {color:green;}
          25%  {color:orange;}
          50%  {color:red;}
          75%  {color:blue;}
          100% {color:green;}
        }

        /* Standard syntax */
        @keyframes siganim {
          0%   {color:green;}
          25%  {color:orange;}
          50%  {color:red;}
          75%  {color:blue;}
          100% {color:green;}
        }
        /* Base del "Bien Hecho!" */
        .bien {
  	      background-color: #3FC35F;
          position: fixed;
          left: 32.5%;
          top: 16.5%;
          width: 35%;
          font-size: 80%;
          opacity: 0;
          z-index: -1;
          -webkit-transition: 1s; /* For Safari 3.1 to 6.0 */
          transition: 1s;
        }

        .hecho {
          opacity: 1;
          z-index: 2;
          -webkit-animation-name: borde; /* Safari 4.0 - 8.0 */
          -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
          -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
        }

        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes borde {
            0%   {border: 3px solid blue;}
            25%  {border: 3px solid red;}
            50%  {border: 3px solid orange;}
            75%  {border: 3px solid SpringGreen ;}
            100% {border: 3px solid blue;}
        }

        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes bienanim { opacity: 0; }

        /* Standard syntax */
        @keyframes bienanim { opacity: 0; }

        .bienhecho {
          color: black;
          left: 0;
          top: 0;
          width: 100%;
          text-align: center;
          font-size: 230%;
        }
        img#DoubleHighFive { width: 100%; height: 100%;}
        .fondo {
          -webkit-transition: 2s; /* For Safari 3.1 to 6.0 */
          transition: 2s;
        }
        .osc { z-index: -1; -webkit-filter: brightness(70%); /* Safari 6.0 - 9.0 */}
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
    <iframe src="assets/sonidos/silence.mp3" allow="autoplay" style="display:none"></iframe>
    <audio autoplay>
      <source src="assets/sonidos/toca-cuadros.mp3" type="audio/mpeg">
    </audio>
    <?php
      include 'connection.php';
      // Sonidos ----------------------------------------------------------------------------------------------------------------
      $act = $_POST["actividad"];
      echo "<p>".$act."</p>";
      echo "<audio id=OnomatopeyaActual>";
      $q = "SELECT Img_sonido FROM tema, actividad, imagen WHERE Act_cod = '".$act."' and Act_Tea_cod = Tea_cod and Tea_Img_cod = Img_cod GROUP BY Img_sonido";
      $rs = mysqli_query($conn,$q);
      while ($row = mysqli_fetch_array($rs)) {
        echo "<source src=".$row['Img_sonido']." type=audio/mpeg>";
      }
      echo "</audio>";
      // ------------------------------------------------------------------------------------------------------------------------
    ?>
    <audio id="BH1mp3">
      <source src="assets/sonidos/felicidades-completada.mp3" type="audio/mpeg">
    </audio>
    <audio id="BeHappymp3">
      <source src="assets/sonidos/ringtones-be-happy.mp3" type="audio/mpeg">
    </audio>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <form method="post" action="actividad.php">
    <?php
// Boton de Retroceso -------------------------------------------------------------------------------------------------------
      $act = $_POST["actividad"];
      $q = "SELECT Tea_cod FROM tema, actividad WHERE Act_cod = '".$act."' and Act_Tea_cod = Tea_cod GROUP BY Tea_cod";
      $rs = mysqli_query($conn,$q);
      while ($row = mysqli_fetch_array($rs)) {
        echo "<input type=hidden name=tema value=".$row['Tea_cod'].">";
      }
// ------------------------------------------------------------------------------------------------------------------------
    ?>
    <button id="uit" class="fa fa-backward" type="submit"></button>
  </form>

  <!-- start pricing table -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area wow fadeInLeft">
            <h2 class="title">De Foto a <span>Pictograma</span></h2>
            </br></br>
            <b><big>TOCA LOS CUADROS</big></b>
            </br></br>
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div id="campo" class="row">

            <?php
              // Picto -------------------------------------------------------------------------------------------------------------------------
              $q = "SELECT Img_url FROM cuadro, imagen WHERE Cua_Act_cod = '".($act-1)."' and Cua_cod = 10 and Cua_Img_cod = Img_cod";
              $rs = mysqli_query($conn,$q);
              while ($row = mysqli_fetch_array($rs)) {
                $picto = $row['Img_url'];
              }
              // Cuadros ------------------------------------------------------------------------------------------------------------------------
              $act = $_POST["actividad"];
              $a = 0.5;
              $count = 1;
              $q = "SELECT Cua_cod,Img_url FROM cuadro, imagen WHERE Cua_Act_cod = '".$act."' and Cua_Img_cod = Img_cod";
              $rs = mysqli_query($conn,$q);
              while ($row = mysqli_fetch_array($rs)) {
                echo "<div class='col-md-3 col-sm-3 col-xs-6'>";
                  echo "<div id=cuadro class='single-plan wow' data-wow-duration=".$a."s data-wow-delay=".$a."s onclick=playOnomatopeya()>";
                    echo "<a href=#subscribe><img src=".$row['Img_url']." class=btn onclick=CambioPicto".$count."();OnomFin();javascript:sndReq('".$count."','".$act."')></a>";
                    echo "<img src=".$picto." style=width:100%;>";
                  echo "</div>";
                echo "</div>";

              $a = $a + 0.25;
              $count = $count + 1;
              }
              // ------------------------------------------------------------------------------------------------------------------------
            ?>

            </div>
          </div>
        </div>
        <!-- MSJ Final-->
        <div id="cartel" class="col-md-3 col-sm-3 col-xs-6 bien">
          <center><b class="bienhecho">TEMA COMPLETADO!</b></center>
          <img id="DoubleHighFive" src="assets\images\Actividad\02.DoubleHighFive_960x663.gif" >
        </div>
      </div>
    </div>
  </section>
  <!-- End pricing table -->

  <?php
    $act = $_POST["actividad"];
    $q = "SELECT Tea_cod FROM tema, actividad WHERE Act_cod = '".$act."' and Act_Tea_cod = Tea_cod GROUP BY Tea_cod";
    $rs = mysqli_query($conn,$q);
    while ($row = mysqli_fetch_array($rs)) {
      $q = $row['Tea_cod'];
    }
  ?>
  <section id="subscribe">
    <form method="post" action="actividad.php">
      <?php
        echo "<input type=hidden name=tema value=".$q.">";
      ?>
      <center id="siguiente">
        <button type="submit" class="btn-success">
          <i align="center" class="fa fa-play"></i>
        </button>
      </center>
    </form>
  </section>

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
  <!-- Cambio Img js -->
  <script type="text/javascript" src="assets\js\fotoapicto.js"></script>
  <!-- Insert DB js -->
  <script type="text/javascript" src="assets\js\RequestObject.js"></script>

  </body>
</html>

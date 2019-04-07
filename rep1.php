<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Picto Imagen</title>
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

    <?php
      include 'connection.php';
      session_start();
     ?>

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
      .table-striped tbody tr:nth-child(odd) td,
      .table-striped tbody tr:nth-child(odd) th {
      	background-color: #B9DCF1;
      }
      #uit {
        position: absolute;
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
      #uitprint {
        position: absolute;
        left: 80%;
        top: 3%;
        font-size: 280%;
        z-index: 11;
        text-align: center;
        color: #FFFFFF;
      }
      #uitprint:hover {
      opacity: 0.6;
      }
      .pull-right {
          color: black;
          margin: 0 6%;
      }
      .pull-left {
          color: black;
          margin: 0 6%;
      }
      .filas {
        font-size: 15px;
        color: black;
        width: 100%;
        margin: 12px 0;
        border: 1px;
        background-color: #B9DCF1;
      }
      #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        color: black;
      }
      #customers td, #customers th {
        border: 1px solid #07171B;
        padding: 8px;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0081CC;
        color: white;
      }
      @media print {
          .noprint {display:none !important;}
          a:link:after, a:visited:after {
            display: none;
            content: "";
          }
      }
    </style>
</head>
<body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <a id=uit href="reportes.php"><i class="fa fa-backward"></i></a>
  <a id=uitprint onclick="window.print();return false" href="#"><i class="fa fa-print"></i></a>

  <!-- Start download app -->
  <section id="download-app">
    <div class="download-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-area wow fadeInUp">
              <h2 class="title">Reporte <span>#1</span></h2>
              <?php
                echo "<p>Cuadros, actividades y temas realizados por ".$_SESSION["usuario"].".</p>";
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End download app -->

	<div id="wrap">
		<table id=customers cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
			<thead>
				<tr>
          <th>Cuadro ↑↓</th>
          <th>Actividad ↑↓</th>
          <th>Tema ↑↓</th>
          <th>Fecha ↑↓</th>
				</tr>
			</thead>
			<tbody>
        <?php
          $q = "SELECT His_Cua_cod, Tac_nom, Tea_nom, His_Fecha FROM historial, cuadro, actividad, tipoactividad, tema WHERE His_Usu_id = '".$_SESSION["usuario"]."' AND His_Cua_Act_cod = Cua_Act_cod AND Cua_Act_cod = Act_cod AND ACt_Tac_cod = Tac_cod AND Act_Tea_cod = Tea_cod GROUP BY His_Fecha";
          $rs = mysqli_query($conn,$q);
          while ($row = mysqli_fetch_array($rs)) {
            echo "<tr>";
              echo "<td>".$row['His_Cua_cod']."</td>";
              echo "<td>".$row['Tac_nom']."</td>";
              echo "<td>".$row['Tea_nom']."</td>";
              echo "<td class='center'>".$row['His_Fecha']."</td>";
            echo "</tr>";
          }
          ?>
			</tbody>
			<tfoot>
        <tr>
          <th>Cuadro</th>
          <th>Actividad</th>
          <th>Tema</th>
          <th>Fecha</th>
        </tr>
			</tfoot>
		</table>
	</div>

    <!-- Start footer -->
    <footer id="footer">
      <div class="col-md-12"></div>
    </footer>
    <!-- End -->

    <!-- jQuery library para la tabla -->
		<script src="assets\js\jQuery-library\jquery.min.js"></script>
		<script src="assets\js\bootstrap.min.js"></script>
		<script src="assets\js\jQuery-library\jquery.dataTables.min.js"></script>
		<script src="assets\js\datatables.js"></script>
		<script type="text/javascript">
  		$(document).ready(function() {
  			$('.datatable').dataTable({
  				"sPaginationType": "bs_four_button"
  			});
  			$('.datatable').each(function(){
  				var datatable = $(this);
  				// SEARCH - Add the placeholder for Search and Turn this into in-line form control
  				var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
  				search_input.attr('placeholder', 'Buscar');
  				search_input.addClass('form-control input-sm filas');
  				// LENGTH - Inline-Form control
  				var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
  				length_sel.addClass('form-control input-sm filas');
  			});
  		});
		</script>

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

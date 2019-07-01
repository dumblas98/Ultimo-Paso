<?php


include ('conecta_db.php');


?>


<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="JSOFT Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
			
	
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li
									
								</ul>
								
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>Artículos</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="listar.php">Listar Artículos</a>
											</li>
											<li>
												<a href="nuevoarticulo.php">Nuevo Artículo</a>
											</li>
											<li class="nav-parent">
												<a>Familias de Artículos</a>
												<ul class="nav nav-children">
													<li>
														<a href="listarfamilia.php">Listar Familias</a>
													</li>
													<li>
														<a href="nuevafamilia.php">Nueva Familia de Artículos</a>
													</li>
												</ul>
											</li>
												<li class="nav-parent">
												<a>Tipos de Artículos</a>
												<ul class="nav nav-children">
													<li>
														<a href="listartipos.php">Listar Tipos de Artículos</a>
													</li>
													<li>
														<a href="nuevotipo.php">Nuevo Tipo de Artículo</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
							<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>Lotes</span>
										</a>
										<ul class="nav nav-children">
											
											
											<li>
												<a href="listarlotes.php">Listar Lotes de Artículos</a>
											</li>
											<li>
											
												<a href="nuevolote.php">Nuevo Lote de Artículos</a>
											</li>
											
										</ul>
									</li>
							</nav>
				
						
							
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section style="text-align:center;" role="main" class="content-body">

					
					<h2 style="text-align:center;">Introduzca un nuevo articulo</h2>
				<div style="text-align:center;">
					<table style="HEIGHT:100%;WIDTH:100%;" border=1>
						<tr  align="center" bottom="middle">
							<td>Id Artículo</td>
							<td>Lote</td>
							<td>Tipo</td>
							<td>Familia</td>
						</tr>
						<tr  align="center" bottom="middle">
						<form action="" method="post">
							<td><input type="text" name="id_tipo" minlength="7" /></td>
							<td>
										<div  class="col-md-6">				
										<select id="lote_articulos"style="width: 200%; data-plugin-selectTwo class="form-control populate">
											<?php	
											$sql="select descripcion from Lote_Articulos";
											$result=mysqli_query($conecta,$sql);
											while($mostrar=mysqli_fetch_array($result)){
											?>
											<option <input type="text" name="lote" minlength="7" /><?php echo $mostrar['descripcion']	?></option>
											
											<?php	
											}
											?>	
											
										</select>
									</div>
							</td>
							<td>
									<div class="col-md-6">				
										<select id="lista_reproduccion" style="width: 230%; data-plugin-selectTwo class="form-control populate">
										</select>
									</div>
							</td>
							<td>
							
						
								<div class="col-md-6">				
									<select id="videos" style="width: 230%; data-plugin-selectTwo class="form-control populate">
										
									</select>
								</div>
				
							</td>
						</tr>
					
					</table>
				</div>
				
				
<?php		
if  (isset($_POST['submit'])) {
	
	$idtipo = mysqli_real_escape_string($conecta,$_POST['id_tipo']);
	
			mysqli_query($conecta, "INSERT INTO Articulos (id_tipo) VALUES('".$idtipo."')");
			
}
	?>
<input class="form-btn" name="submit" type="submit" value="Agregar" /> 
						</form>
				</div>
				</section>
					
					
				


		<!-- Vendor -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="assets/javascripts/index.js"></script>
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
		
	</body>
</html>
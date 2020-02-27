<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" href="images/eliteadmin-logo.png">
	<title>Clínica Veterinaria</title>

	<?php include "modulos/header.php"; ?>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader">
			<div class="cssload-speeding-wheel"></div>
	</div>
	<div id="wrapper">
			<!-- Navigation -->
			<?php 
				include "modulos/navbar.php";
				include "modulos/sidebar.php";
			?>
			
			<!-- Page Content -->
			<div id="page-wrapper">
					<div class="container-fluid">
							<div class="row bg-title">
									<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
										<h4 class="page-title">Clínica Veterinaria</h4> </div>
										<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
											<ol class="breadcrumb">
												<li><a href="index.php">Clínica</a></li>
												<li class="active">Dashboard</li>
											</ol>
										</div>
									<!-- /.col-lg-12 -->
							</div>
					</div>
					<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<?php include "modulos/footer.php"; ?>
</body>

</html>
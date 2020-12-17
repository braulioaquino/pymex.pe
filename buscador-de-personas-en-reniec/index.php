<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscar documento</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.box-content{
			border: 1px solid #7766667a;
			border-radius: 3px;
			padding: 6px;
			background: #f7f1f1;
		}
	</style>
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>

	<div class="container">
		<br>
		<div class="row justify-content-center">
			<div class="col-xs-12 col-sm-6 box-content">
				<div class="row">
					<div class="col-12 text-center">
						<h3 class="font-weight-light">Consulta de documento</h3>
					</div>
				</div>
				<hr>
				<div class="before-send"></div>
				<form action="consulta.php" method="POST">
					<div class="row">
						<div class="col-10">
							<input type="number" placeholder="Ingrese DNI" name="numero" id="numero" class="form-control" required="">
						</div>
						
						<div  class="col-2"><a href="#" id="search_button" class="btn btn-primary" onclick="search_dni(this); return false;"><i class="fa fa-search" aria-hidden="true"></i></a></div>
					</div><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12">
						    <p>Nombres y Apellido</p>
							<input type="text" name="nombre_complet" id="nombre_complet" class="form-control" required="" placeholder="Nombre y Apellido">
						</div>
					</div><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12">
						<p>Direccion</p>
							<input type="text" name="direccion" id="direccion" class="form-control" required="" placeholder="Direccion">
						</div>
					</div><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12">
						<p>Departamento</p>
							<input type="text" name="departamento" id="departamento" class="form-control" required="" placeholder="Departamento">
						</div>
					</div><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12">
						<p>Distrito</p>
							<input type="text" name="distrito" id="distrito" class="form-control" required="" placeholder="Distrito">
						</div>
					</div><br>
					<div class="row">
						<div class="col-xs-12 col-sm-12">
						<p>Provincia</p>
							<input type="text" name="provincia" id="provincia" class="form-control" required="" placeholder="Provincia">
						</div>
					</div><br>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/search.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
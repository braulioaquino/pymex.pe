<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Consulta SUNAT</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
<section class="container">
	<hr>
	<h1 class="text-center">CONSULTA SUNAT</h1>

	<form class="form-inline" method="post">
		<div class="form-group mx-sm-3 mb-2">
			<input type="text" class="form-control" id="ruc" name="ruc" placeholder="Ingresa el Ruc">
		</div>
		<button id="clickButton" class="btn btn-primary mb-2"> <i class="fa fa-search"></i> Buscar</button>
		<img src="ajax.gif" class="ajaxgif hide" style="height:50px;">
	</form>


	<!--<form method="post">
		<input type="text" class="ruc" id="ruc" name="ruc">
		<button id="clickButton" class="clickButton"><i class="fa fa-search"></i> Buscar</button>
		<img src="ajax.gif" class="ajaxgif hide">
	</form>-->
	<div class="jumbotron"  >

	<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">RUC:</th>
      <th scope="col">RAZON SOCIAL</th>
      <th scope="col">INICIO DE ACTIVIDAD</th>
      <th scope="col">CONDICION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><span id="numero_ruc"></td>
      <td><span id="razon_social"></span></td>
	  <td><span id="fecha_actividad"></span></td>
	  <td><span id="condicion"></span></td>
    </tr>
  </tbody>
</table>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">TIPO DE CONTRIBUYENTE</th>
      <th scope="col">ESTADO DE CONTRIBUYENTE</th>
      <th scope="col">FECHA DE INSCRIPCION</th>
      <th scope="col">EMISION ELECTRONICA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><span id="tipo"></span></td>
      <td><span id="fecha_inscripcion"></span></td>
      <td><span id="fecha_inscripcion"></span></td>
      <td><span id="emision"></span></td>
    </tr>
   
  </tbody>
</table>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">DOMICILIO</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><span id="domicilio"></span></td>
    </tr>
   
  </tbody>
</table>


   </div>

</section>
<script>
$(function(){
	$('#clickButton').on('click', function(){
		var ruc = $('#ruc').val();
		var url = 'consultaSunat.php';
		$('.ajaxgif').removeClass('hide');
		$.ajax({
		type:'POST',
		url:url,
		data:'ruc='+ruc,
		success: function(datos_dni){
			$('.ajaxgif').addClass('hide');
			var datos = eval(datos_dni);
				var nada ='nada';
				if(datos[0]==nada){
					alert('DNI o RUC no es válido o no esta registrado');
				}else{
					//$('#numero_ruc').val(datos[0]); for imput
					$('#numero_ruc').text(datos[0]);
					$('#razon_social').text(datos[1]);
					$('#fecha_actividad').text(datos[2]);
					$('#condicion').text(datos[3]);
					$('#tipo').text(datos[4]);
					$('#estado').text(datos[5]);
					$('#fecha_inscripcion').text(datos[6]);
					$('#domicilio').text(datos[7]);
					$('#emision').text(datos[8]);
				}		
		}
	});
	return false;
	});
});
</script>
</body>
</html>

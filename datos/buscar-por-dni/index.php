<?php include '../home/head.php'; ?>
<body>
<div id="main-wrapper">
<?php include '../home/header.php'; ?>

<div id="page-content">
<div class="container">
<div class="home-with-slide">
<div class="row">
<div class="col-md-9 col-md-push-3"><span id="ezoic-pub-ad-placeholder-144" class="ezoic-adpicker-ad"></span>
<div class="page-content">
<div class="product-details-list">
<div class="tab-content to-lock-1">
<div class="tab-pane active " id="categorias">
    <h3>BUSCAR PERSONAS POR DNI</h3>


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PMX-Datos-Display -->
<div class="hidden-xs hidden-sm">
<ins class="adsbygoogle"
    style="display:inline-block;width:336px;height:280px"
    data-ad-client="ca-pub-7512798297333598"
    data-ad-slot="6103554018"></ins>
    </div>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PMX-Datos-Display-Mov -->
<div class="visible-xs visible-sm">
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-7512798297333598"
     data-ad-slot="9528627850"></ins>
     </div>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>

<div class="row clearfix">


<div class="caja1r">
   
    <form class="form-inline" method="post">
		<div class="form-group ">
			<input type="text" class="form-control" id="ruc" name="ruc" placeholder="Ingresa el DNI">
		</div>
	<button id="clickButton" class="btn btn-primary mb-2"> <i class="fa fa-search"></i> Buscar</button>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<img src="ajax.gif" class="ajaxgif hide" style="height:50px;">
		</div>
	</form>
    
<br>
	<form>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">DNI</label>
      <input type="text" readonly="readonly" class="form-control" id="numero_ruc" placeholder="Dni">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">APELLIDO Y NOMBRE</label>
      <input type="text" readonly="readonly" class="form-control" id="razon_social" placeholder="Apellido y Nombre">
    </div>
    </div>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">INICIO ACTIVIDAD</label>
    <input type="text" readonly="readonly" class="form-control" id="fecha_actividad" placeholder="Inicio de Actividad">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">CONDICIÓN</label>
    <input type="text" readonly="readonly" class="form-control" id="condicion" placeholder="Condición">
  </div>
  </div>


  <div class="form-row">
  <div class="form-group col-md-12">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PMX-Datos-EnlacesAbajo -->
<div class="hidden-xs hidden-sm">
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-7512798297333598"
    data-ad-slot="3035178170"
    data-ad-format="link"
    data-full-width-responsive="true"></ins>
</div>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- PMX-Datos-EnlacesAbajo-Movil -->
<div class="visible-xs visible-sm">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7512798297333598"
     data-ad-slot="1829923626"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
     </div>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>


  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">TIPO DE CONTRIBUYENTE</label>
    <input type="text" readonly="readonly" class="form-control" id="tipo" placeholder="Tipo de Contribuyente">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">ESTADO DE CONTRIBUYENTE</label>
    <input type="text" readonly="readonly" class="form-control" id="fecha_inscripcion" placeholder="Estado de Contribuyente">
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">FECHA DE INSCRIPCIÓN</label>
    <input type="text" readonly="readonly" class="form-control" id="fecha_inscripcion" placeholder="Fecha de Inscripción">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">EMISION ELECTRÓNICA</label>
    <input type="text" readonly="readonly" class="form-control" id="emision" placeholder="Emision Electrónica">
  </div>
  </div>
  <div class="form-row col-md-12">
  <div class="form-group ">
    <label for="inputAddress2">DOMICILIO</label>
    <input type="text" readonly="readonly" class="form-control" id="domicilio" placeholder="Domicilio">
  </div>
  </div>

</form> 



</div>



</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-md-pull-9 category-toggle">
<button><i class="fa fa-briefcase"></i></button>
<div class="page-sidebar">
<?php include '../home/ultimas_empresas.php'; ?>
</div>
</div>
</div>
</div>
</div>
</div>
<footer id="footer">
<div class="copyright">
<div class="container">
<p>Copyright © pymex.org - Todos los derechos reservados</p>

</div>
</div>
</footer>
</div>

</body>
</html>
<script src="js/jquery.min.js"></script>
<script>
$(function(){
	$('#clickButton').on('click', function(){
		var ruc = $('#ruc').val();
		var url = '../buscar-por-dni/consulta/consultaSunat.php';
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
					$('#numero_ruc').val(datos[0]);
					$('#razon_social').val(datos[1]);
					$('#fecha_actividad').val(datos[2]);
					$('#condicion').val(datos[3]);
					$('#tipo').val(datos[4]);
					$('#estado').val(datos[5]);
					$('#fecha_inscripcion').val(datos[6]);
					$('#domicilio').val(datos[7]);
					$('#emision').val(datos[8]);
				}		
		}
	});
	return false;
	});
});
</script>


<?php include '../home/head.php'; ?>
<body>

<div id="main-wrapper">
<?php include '../home/header.php'; ?>

<div id="page-content">
<div class="container">



<?php 
$idempresa = $_GET['ruc'];
$query_empresa = "SELECT DISTINCT e.ruc_empresa,slug_empresa,razon_social,inicio,num_trabajadores,e.ciiu_actividad,a.nombre_actividad as sector,slug_actividad,direccion,e.departamento,provincia,distrito,telefono,telefono01,
re.ruc as ruc_reactiva, re.nombre_entidad, re.monto_prestamo,re.monto_cobertura,nombre,cargo
from tbl_empresa as e
inner join m_actividad a
on e.ciiu_actividad = a.ciiu_actividad
left join tbl_persona p
on e.ruc_empresa = p.ruc_empresa
left join reactiva_empresas as re
on e.ruc_empresa = re.ruc where slug_empresa = '$idempresa'";
/**$query_empresa = "SELECT * FROM tbl_empresa where empresa_slug = '$idempresa'";**/
 $result_empresa = mysqli_query($con, $query_empresa);
 if (mysqli_affected_rows($con) != 0) {
     while ($rowempresa = mysqli_fetch_array($result_empresa, MYSQLI_ASSOC)) {
          $nombre_empresa = $rowempresa['razon_social'];
          $razon_social = $rowempresa['razon_social'];
          $inicio = $rowempresa['inicio'];
          $ruc = $rowempresa['ruc_empresa'];
          $ciiu = $rowempresa['ciiu_actividad'];
          $direccion = $rowempresa['direccion'];
          $departamento = $rowempresa['departamento'];
          $provincia = $rowempresa['provincia'];
          $distrito = $rowempresa['distrito'];
          $telefono = $rowempresa['telefono'];
          $telefono01 = $rowempresa['telefono01'];
          $actividad = $rowempresa['ciiu_actividad'];
          $slug_actividad = $rowempresa['slug_actividad'];
          $sector = $rowempresa['sector'];
          $num_trabajadores = $rowempresa['num_trabajadores'];

          $nombre_entidad = $rowempresa['nombre_entidad'];
          $monto_prestamo = $rowempresa['monto_prestamo'];
          $monto_cobertura = $rowempresa['monto_cobertura'];

         }
?>

<div class="row">
<div class="col-md-9 col-md-push-3">
<div class="page-content company-profile "><span id="ezoic-pub-ad-placeholder-144" class="ezoic-adpicker-ad"></span>
<div>
</div>
<div class="tab-content to-lock-1">
<div class="tab-pane active" id="company-profile">
<h2 style="text-transform: uppercase;"><?php echo  utf8_encode($razon_social);?></h2>
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
<div id="share"></div>
<div>
<h4>MARCA DE ACTIVIDAD DE COMERCIO EXTERIOR </h4>
<div class="col-sm-12">
<div style="border-bottom: 1px solid #ddd;padding: 10px 0;">
<p style="text-transform: uppercase;"><b>
  <i class="fa fa-arrow-right"></i> </b>No Especificado</p>

</div>
</div>
</div>

<?php if(empty($nombre_entidad)){ ?>
<?php } else { ?>
  <div>
<div class="row shortcodes clearfix">
<h4>EMPRESA BENEFICIADA POR REACTIVA PERÚ</h4>
<table class="table-hover">
<thead>
<tr>
<th>ENTIDAD OTORGANTE CRÉDITO</th><th>MONTO PRÉSTAMO (SOLES)</th><th>MONTO DE COBERTURA (SOLES)</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo utf8_encode($nombre_entidad);?></td><td> <?php echo $monto_prestamo;?> </td><td> <?php echo $monto_cobertura;?> </td>
</tr>
</tbody>
</table>
</div>
</div>
<?php } ?>



<div>
<h4>SECTOR ECONÓMICO DE DESEMPEÑO</h4>
<div class="col-sm-12">
<div style="border-bottom: 1px solid #ddd;padding: 10px 0;">
<a href="../actividad/?ciiu=<?php echo $slug_actividad;?>" style="text-transform: uppercase;"><b>
<i class="fa fa-arrow-right"></i></b><?php echo utf8_encode($sector);?> <i class="fa fa-external-link">
</i></a>
</div>
</div>
</div>
<div>
<br>
</div>
<div>



</div>
<div>
<br>
<span id="ezoic-pub-ad-placeholder-114" class="ezoic-adpicker-ad"></span>
<span style="float: none; min-height: 420px; min-width: 580px; display: none !important; margin: 2px 0px !important; text-align: center !important;" 
class="ezoic-ad box-4 adtester-container adtester-container-114" data-ez-name="datosperu_org-box-4">

<span id="div-gpt-ad-datosperu_org-box-4-0" ezaw="580" ezah="400" style="position:relative;z-index:0;display:inline-block;min-height:400px;min-width:580px;" class="ezoic-ad" data-google-query-id="CPyLtLmctOgCFRIGuQYdaJ8NLw">
<div id="google_ads_iframe_/1254144/datosperu_org-box-4_0__container__" style="border: 0pt none; width: 580px; height: 400px;"></div></span></span></div>
<div id="grid_anexos">
<div class="pagination-center"><ul class="pagination">&nbsp;</ul></div><div class="row clearfix"></div> </div>
<div>

<span id="ezoic-pub-ad-placeholder-115" class="ezoic-adpicker-ad">
</span>
<span style="min-height: 420px; min-width: 580px; display: none !important; float: none !important; margin: 2px 0px !important; text-align: center !important;" class="ezoic-ad large-leaderboard-2 adtester-container adtester-container-115" data-ez-name="datosperu_org-large-leaderboard-2">
<span id="div-gpt-ad-datosperu_org-large-leaderboard-2-0" ezaw="580" ezah="400" style="position:relative;z-index:0;display:inline-block;min-height:400px;min-width:580px;" class="ezoic-ad" data-google-query-id="CNDVg7mctOgCFVsFuQYd79UALw">
<div id="google_ads_iframe_/1254144/datosperu_org-large-leaderboard-2_0__container__" style="border: 0pt none; width: 500px; height: 300px;"></div></span></span></div>
<div> 
  <div class="row shortcodes clearfix">
  <h4>CANTIDAD DE TRABAJADORES Y/O PRESTADORES DE SERVICIO </h4>


  <table class="table-hover">
  <thead>
  <tr> 
    <th>NRO. TRABAJADORES</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td><i class="fa fa-users"></i> <?php echo $num_trabajadores;?></td>
  </tr>

 
  </tbody>
  </table>

  



  </div>
  </div>

</div>
</div>



</div>
</div>



<div class="col-md-3 col-md-pull-9 category-toggle">
<!-- <button><i class="fa fa-briefcase"></i></button>-->
<div class="page-sidebar company-sidebar">
<span id="ezoic-pub-ad-placeholder-124" class="ezoic-adpicker-ad"></span>

<div class="contact-details">
<h2>DATOS EMPRESA</h2>
<ul class="list-unstyled">
<div itemscope="" itemtype="http://schema.org/Organization">
<li>
<strong>NOMBRE</strong>
<span itemprop="name" style="text-transform: uppercase;"><?php echo  utf8_encode($nombre_empresa);?></span>
</li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li>
<strong>RUC</strong>
<span itemprop="taxID"><?php echo  $ruc;?></span>
</li>
<li>
<strong>INICIO</strong>
<span itemprop="foundingDate"><?php echo  $inicio;?></span>
</li>
<li>
<strong>ESTADO</strong><span style="text-transform: uppercase;">ACTIVO</span>
</li>
<li>
<strong>TIPO</strong>
<span style="text-transform: uppercase;">--<br></span>
</li>
<li></li>
<li></li>
<li></li>
<li>
<strong>CIIU</strong>
<span>
<?php echo  $ciiu;?></span>
</li>
<div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
<li>
<strong>DIRECCIÓN</strong>
<span itemprop="streetAddress"> <a style="cursor: pointer; color:#24AAff;text-transform: uppercase; " onclick="verenmapa()"><?php echo  utf8_encode($direccion);?></a> </span>
</li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li>
<strong>REFERENCIA</strong>
<span style="text-transform: uppercase;">-</span>
</li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li>
<strong>DEPARTAMENTO</strong>
<a href="../departamento/?d=<?php echo $departamento;?>">
<span itemprop="addressRegion" style="text-transform: uppercase;"><?php echo   utf8_encode($departamento);?></span>
</a>
</li>
<li>
<strong>PROVINCIA</strong>
<a href="../provincia/?p=<?php echo $provincia;?>">
<span itemprop="addressLocality" style="text-transform: uppercase;"><?php echo   utf8_encode($provincia);?></span>
</a>
</li>
<li>
<strong>DISTRITO</strong>
<a href="../distrito/?d=<?php echo $distrito;?>">
<span style="text-transform: uppercase;"><?php echo   utf8_encode($distrito);?></span>
</a>
</li>
<li></li>
</div>
<li>
<strong>TELÉFONO</strong>
<span itemprop="telephone"><a href="tel:+5184221971"><?php echo  $telefono;?></a></span>
</li>
<li>
<strong>TELÉFONO</strong>
<span itemprop="telephone"><?php echo  $telefono01;?></span>
</li>
<li>
<strong>TELÉFONO</strong>
<span itemprop="telephone">-</span>
</li>
<li>
<strong>TELÉFONO</strong>
<span itemprop="telephone">-</span>
</li>
</div>
</ul>
</div>
<div class="square-button">
</div>
</div>
</div>





</div>

<?php  }else{ ?>

<?php } ?>

<div class="row">
  <div class="col-md-9 col-md-push-3">
<h4>ALGUNOS DE LOS PRINCIPALES EJECUTIVOS, REPRESENTANTES O DIRECTORES</h4>
  <div class="row clearfix">
  <?php 
        $idactividad = $_GET['ruc'];
        $query = "SELECT DISTINCT e.ruc_empresa,razon_social,slug_empresa,nombre,apellido,cargo,slug_persona
        from tbl_empresa e
        inner join tbl_persona p
        on e.ruc_empresa = p.ruc_empresa where slug_empresa = '$idactividad'";
        $result = mysqli_query($con, $query);
        $i = 1; 
        $cont=0;
        if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $cont=$cont+1;
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $cargo = $row['cargo'];
        $slug_persona = $row['slug_persona'];
        ?>


  <div class="col-sm-12">
           <div style="border-bottom: 1px solid #ddd;padding: 10px 0;text-transform: uppercase;">
           <a href="../persona/?name=<?php echo $slug_persona;?>"><b>
           <i class="fa fa-arrow-right"></i> <?php echo utf8_encode($cargo);?> : </b><?php echo utf8_encode($nombre);?> <?php echo utf8_encode($apellido);?> <i class="fa fa-external-link"></i> 
           </a>
           </div>
</div>

<?php
  }
}
$i = 1;
?> 
 
</div>

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
<br>

  </div>
  <div class="col-md-3 col-md-pull-9 category-toggle">
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


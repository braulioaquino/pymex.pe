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
<h3>RESULTADOS DE LA BUSQUEDA</h3>
<div id="share">
</div>
<div class="row clearfix">

<?php

require_once '../include/conect.php';

if (isset($_GET['buscar'])) {

    $keywords = $db->escape_string($_GET['buscar']);

    $query = $db->query("SELECT idtbl_empresa,ruc_empresa,razon_social,slug_empresa
                from tbl_empresa       
                where razon_social  LIKE '%{$keywords}%' OR ruc_empresa LIKE '%{$keywords}%' ORDER BY idtbl_empresa desc ");
        
?>
  <?php
  if ($query->num_rows) {
      while($r = $query->fetch_object()){
   ?> 

        <div class="col-sm-12">
        <div class="single-product">
        <a style="text-transform: uppercase;" href="../empresa/index.php?ruc=<?php echo $r->slug_empresa;?>">
        <i class="fa fa-arrow-right"></i> <b><?php echo utf8_encode($r->razon_social);?>  </b> (RUC: <?php echo $r->ruc_empresa;?> )</a>
        </div>
        </div>

      <?php }  ?>

  <?php } else {?>
    <div class="col-sm-12">
        <div class="single-product">
           <h4>Oh..! no hemos encontrado lo que buscas</h4><br>
           <a href="../home"> Ir a la página principal</a>
        </div>
        </div>
  <?php  }  ?> 

<?php  }  ?> 



</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-md-pull-9 category-toggle">
<button><i class="fa fa-briefcase"></i></button>
<div class="page-sidebar">
<!--<div id="categories">
<div class="accordion">
<ul class="nav nav-tabs home-tab" role="tablist">
<li class="active">
<a href="https://www.datosperu.org" role="tab" data-toggle="tab">Empresas
<span>Por Actividad</span>
</a>
</li>
<li>
<a href="directorio-de-marcas-del-peru.php" role="tab" data-toggle="tab">Marcas
<span>Por Clase</span>
</a>
</li>
<li>
<a href="directorio-de-normas-legales-del-peru.php" role="tab" data-toggle="tab">Normas Legales
<span>Por Año</span>
</a>
</li>
<li>
<a href="directorio-de-comercio-exterior-del-peru.php" role="tab" data-toggle="tab">Comercio Exterior
<span>Por Tipo</span>
</a>
</li>
<li>
<a href="directorio-de-medicinas-del-peru.php" role="tab" data-toggle="tab">Medicinas
<span>Por Clasificación</span>
</a>
</li>
<li>
<a href="directorio-de-minas-del-peru.php" role="tab" data-toggle="tab">Minas
<span>Por Departamento</span>
</a>
</li>
</ul>
</div>
</div>-->




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

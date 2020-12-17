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
<h3>FILTRO POR PROVINCIA</h3>
<div id="share">
</div>
<div class="row clearfix">

<?php

require_once '../include/conect.php';

if (isset($_GET['p'])) {

    $keywords = $db->escape_string($_GET['p']);

    $query = $db->query("SELECT idtbl_empresa,ruc_empresa,razon_social,slug_empresa,provincia
                from tbl_empresa       
                where provincia  LIKE '%{$keywords}%' ORDER BY idtbl_empresa desc limit 3000 ");
        
?>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>EMPRESA</th>
                <th>PROVINCIA</th>
            </tr>
        </thead>
        <tbody>

  <?php
  if ($query->num_rows) {
      while($r = $query->fetch_object()){
   ?> 

        

        <tr>
        <td>
        <div class="col-sm-12">
        <div class="single-product">
        <a href="../empresa/index.php?ruc=<?php echo $r->slug_empresa;?>" style="text-transform: uppercase;">
        <i class="fa fa-arrow-right"></i><b> <?php echo utf8_encode($r->razon_social);?>  </b> (RUC: <?php echo $r->ruc_empresa;?> )</b></a>
        </div>
        </div>
        </td>

        <td>
        <div class="col-sm-12">
        <div class="single-product" style="text-transform: uppercase;">
        <b> <?php echo $r->provincia;?></b>
        </div>
        </div>
        </td>

        

       

        </tr>

      <?php }  ?>
     
        </tbody>
    </table>
	
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

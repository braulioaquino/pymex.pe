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
<?php 
        $idactividad = $_GET['ciiu'];
        $query = "SELECT c.nombre_categoria,a.nombre_actividad from m_categoria c 
        inner join m_actividad a 
        on c.ciiu_categoria = a.ciiu_categoria
        where a.slug_actividad = '$idactividad'";
        $result = mysqli_query($con, $query);
        $i = 1; 
        $cont=0;
        if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $cont=$cont+1;
        $nombre_categoria = $row['nombre_categoria'];
        $nombre_actividad = $row['nombre_actividad'];
        ?>
<h3 style="text-transform: uppercase;"><?php echo utf8_encode($nombre_categoria);?> » <?php echo utf8_encode($nombre_actividad);?></h3>

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

<?php
  }
}
$i = 1;
?> 

<div class="row clearfix">


	
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Empresas</th>
               
            </tr>
        </thead>
        <tbody>
       
        <?php 
        $idactividad = $_GET['ciiu'];
        $query = "SELECT a.ciiu_actividad,a.nombre_actividad,e.ruc_empresa,e.razon_social,slug_empresa from m_actividad a
        inner join tbl_empresa e
        on a.ciiu_actividad = e.ciiu_actividad
        where a.slug_actividad = '$idactividad'";
        $result = mysqli_query($con, $query);
        $i = 1; 
        $cont=0;
        if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $cont=$cont+1;
        $nombre = $row['razon_social'];
        $ruc = $row['ruc_empresa'];
        $slug = $row['slug_empresa'];
        ?>
      <tr>
        <td>
        <div class="col-sm-12">
        <div class="single-product" style="text-transform: uppercase;">
        <a href="../empresa/index.php?ruc=<?php echo $slug;?>">
        <i class="fa fa-arrow-right"></i><b> <?php echo utf8_encode($nombre);?></b> (RUC: <?php echo $ruc;?>)</a>
        </div>
        </div>
        </td>
        </tr>

        <?php
        }
        }
        $i = 1;
    ?> 
           
               
           
        </tbody>
    </table>
	






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

<div>
<?php include '../home/ultimas_empresas.php'; ?>
</div>



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




<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!------ Include the above in your HEAD tag ---------->



    
    <!-- Need to use datatables.net -->
 
    
    <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        .dataTable table tr {
            border: solid 1px black;
        }
    </style>
    



<!-- Need to use datatables.net -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>


<script>
$(document).ready(function(){
    
    //Apply the datatables plugin to your table
    $('#example').DataTable();
    
});
</script>


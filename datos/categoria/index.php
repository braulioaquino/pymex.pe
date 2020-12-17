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
        $query = "SELECT nombre_categoria from m_categoria where slug_categoria = '$idactividad'";
        $result = mysqli_query($con, $query);
        $cont="";
        if (mysqli_affected_rows($con) != "") {
        while ($row = mysqli_fetch_array($result)) {
        $nombre_categoria = $row['nombre_categoria'];
        ?>
<h3><?php echo utf8_encode($nombre_categoria);?></h3>

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

<div id="share">
</div>
<div class="row clearfix">

<?php 
        $idactividad = $_GET['ciiu'];
        $query = "SELECT c.ciiu_categoria,c.nombre_categoria,ciiu_actividad,a.nombre_actividad,a.slug_actividad from m_categoria c 
        inner join m_actividad a 
        on c.ciiu_categoria = a.ciiu_categoria
        where slug_categoria = '$idactividad' ";
        $result = mysqli_query($con, $query);
        $i = 1; 
        $cont=0;
        if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $cont=$cont+1;
        $nombre = $row['nombre_actividad'];
        $slug = $row['slug_actividad'];
        $ciiu_actividad = $row['ciiu_actividad'];
        ?>

        <div class="col-sm-12">
        <div class="single-product" style="text-transform: uppercase;">
        <a href="../actividad/index.php?ciiu=<?php echo $slug;?>">
        <i class="fa fa-arrow-right"></i><b> <?php echo utf8_encode($nombre);?></b> (CIIU: <?php echo $ciiu_actividad;?>)</a>
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

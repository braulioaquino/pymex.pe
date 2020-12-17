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
        $idactividad = $_GET['id'];
        $query = "SELECT nombre_categoria,nombre 
        FROM m_actividad a
        inner join m_categoria c
        on c.idm_categoria = a.m_categoria_idm_categoria        
        WHERE idm_actividad = $idactividad";
        $result = mysqli_query($con, $query);
        $i = 1; 
        $cont=0;
        if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $cont=$cont+1;
        $nombre_categoria = $row['nombre_categoria'];
        $nombre_actividad = $row['nombre'];
        ?>
<h3><?php echo utf8_encode($nombre_categoria);?> » <?php echo utf8_encode($nombre_actividad);?></h3>

<?php
  }
}
$i = 1;
?> 
<div id="share">
</div>
<div class="row clearfix">

<?php 
        $idactividad = $_GET['id'];
        $query = "SELECT idtbl_empresa,nombre_empresa,ruc,empresa_slug FROM tbl_empresa 
        where m_actividad_idm_actividad = $idactividad";
        $result = mysqli_query($con, $query);
        $i = 1; 
        $cont=0;
        if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $cont=$cont+1;
        $nombre = $row['nombre_empresa'];
        $idempresa = $row['idtbl_empresa'];
        $ruc = $row['ruc'];
        $slug = $row['empresa_slug'];
        ?>

        <div class="col-sm-12">
        <div class="single-product">
        <a href="../empresa/index.php?ruc=<?php echo $slug;?>">
        <i class="fa fa-arrow-right"></i><b> <?php echo utf8_encode($nombre);?></b> (RUC: <?php echo $ruc;?>)</a>
        </div>
        </div>

        <?php
        }
        }
        $i = 1;
    ?> 



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

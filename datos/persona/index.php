





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
<?php 
$idempresa = $_GET['name'];
$query_empresa = "SELECT DISTINCT p.ruc_empresa,razon_social,slug_empresa,cargo,nombre,apellido
from tbl_persona p 
inner join tbl_empresa e
on p.ruc_empresa = e.ruc_empresa
where slug_persona = '$idempresa'";
/**$query_empresa = "SELECT * FROM tbl_empresa where empresa_slug = '$idempresa'";**/
 $result_empresa = mysqli_query($con, $query_empresa);
 $cont=0;
 if (mysqli_affected_rows($con) != 0) {
     while ($rowempresa = mysqli_fetch_array($result_empresa, MYSQLI_ASSOC)) {
          $nombre = $rowempresa['nombre'];
          $apellido = $rowempresa['apellido'];


        }    ?>

<h2 style="text-transform: uppercase;"><?php echo utf8_encode($nombre);?> <?php echo utf8_encode($apellido);?></h2>

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

<?php  
} 
?>

<?php 
$idempresa = $_GET['name'];
$query_empresa = "SELECT DISTINCT p.ruc_empresa,razon_social,slug_empresa,cargo,nombre,apellido
from tbl_persona p 
inner join tbl_empresa e
on p.ruc_empresa = e.ruc_empresa
where slug_persona = '$idempresa'";
/**$query_empresa = "SELECT * FROM tbl_empresa where empresa_slug = '$idempresa'";**/
 $result_empresa = mysqli_query($con, $query_empresa);
 $i = 1; 
 $cont=0;
 if (mysqli_affected_rows($con) != 0) {
     while ($rowempresa = mysqli_fetch_array($result_empresa, MYSQLI_ASSOC)) {
          $razon_social = $rowempresa['razon_social'];
          $cargo = $rowempresa['cargo'];
          $nombre = $rowempresa['nombre'];
          $apellido = $rowempresa['apellido'];
          $slug_empresa = $rowempresa['slug_empresa'];


          

        
?>

<div class="col-sm-12">
<div style="border-bottom: 1px solid #ddd;padding: 10px 0; text-transform: uppercase;">
<a href="../empresa/index.php?ruc=<?php echo $slug_empresa;?>"><b><i class="fa fa-arrow-right"></i> <?php echo utf8_encode($cargo);?>: </b> <?php echo utf8_encode($razon_social);?></a>
</div>
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


<?php  } 
} 
 $i = 1;
?>





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






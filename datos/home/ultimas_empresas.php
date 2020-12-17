
<div id="categories">
<div class="accordion">
<ul class="nav nav-tabs home-tab" role="tablist">
<div id="actualizadas">
  <div class="accordion">
    <ul class="nav nav-tabs home-tab" role="tablist">
      <li class="active">
        <a href="#" role="tab" data-toggle="tab">Empresas Actualizadas</a>
        <div>
        <?php
        $query = "SELECT idtbl_empresa,razon_social,slug_empresa  FROM tbl_empresa ORDER BY idtbl_empresa desc LIMIT 20";
        $result = mysqli_query($con, $query);
        $i = 1; 
        $cont=0;
        if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $cont=$cont+1;
        $nombre = $row['razon_social'];
        $idempresa = $row['idtbl_empresa'];
        $empresa_slug = $row['slug_empresa'];
        ?>

        <a href="../empresa/index.php?ruc=<?php echo $empresa_slug;?>" style="text-transform: uppercase;" role="tab"><?php echo utf8_encode($nombre);?></a>

        <?php
        }
        }
        $i = 1;
    ?> 
         
          </div>
          </li>
          </ul>
          </div>
        
</div>
</ul>
</div>
</div>


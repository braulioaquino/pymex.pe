<?php 
require_once ("../include/conexion.php");
?>
<h1>CT Instituciones</h1>

<?php   
                $query = "SELECT id,name FROM institutions_institution ";
                $result = mysqli_query($con, $query);
                if (mysqli_affected_rows($con) > 0) {
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                       $name_empresa = $row['name'];
                
                ?>
                <div class="col-sm-6 col-md-3 border-logo-empresa">
                    <h2><?php echo $name_empresa;?></h2>
                </div>
                <?php }?>

                <?php }else{ ?>
                <?php  }  
                ?>
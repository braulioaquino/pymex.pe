<?php

     include ("../util/conexion.php");
    $query = "SELECT * from vr_lim";
    $result = mysqli_query($con, $query);
    if(!$result){
    die("Resultado no trae nada de la Bd ");
    }else{
        while( $data = mysqli_fetch_assoc($result)){
            $arreglo["data"][] = array_map("utf8_encode" , $data);
        }
        echo json_encode($arreglo);
        }         
?>         
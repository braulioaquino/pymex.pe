<?php

// function conectar(){
 $con = new PDO('mysql:host=159.203.98.121;dbname=datosperu;charset=utf8', 'jyc_pymex', 'RkvzdsaMysql');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        return $con;
	
// }
?>
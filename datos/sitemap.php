<?php 
//sitemap.php
$connect = mysqli_connect("159.203.98.121", "jyc_pymex", "RkvzdsaMysql", "datosperu");

$query = "SELECT * FROM tbl_empresa";

$result = mysqli_query($connect, $query);

$base_url = "https://pymex.com/datos/empresa/?ruc=";

//Creamos la cabecera del .xml
$codigo='<?xml version="1.0" encoding="UTF-8"?>

<urlset
xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"> ';

header("Content-Type: application/xml; charset=utf-8");


while($row = mysqli_fetch_array($result))
{
 $codigo .='<url>
<loc>'.$base_url.$row["empresa_slug"];
$codigo .='</loc>
<lastmod>'.date('Y-m-d',strtotime($row["updated_at"])).'</lastmod>
<changefreq>daily</changefreq>
<priority>1.0</priority>
</url>';

}

$codigo .='</urlset>';

//Ahora creamos el archivo con el código necesario
$path = "https://www.pymex.com/var/www/sitemap.xml";
$modo = "w+";

if ($fp=fopen($path,$modo))
{
fwrite ($fp,$codigo);
echo'Se realizo con Exito';
}
else{
echo'Error al Crearse';
}

?>

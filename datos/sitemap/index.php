<?php 
//sitemap.php
$connect = mysqli_connect("159.203.98.121", "jyc_pymex", "RkvzdsaMysql", "datosperu");

$query = "SELECT * FROM tbl_empresa";

$result = mysqli_query($connect, $query);

$base_url = "https://pymex.com/datos/empresa/?ruc=";

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" 
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

echo '<url>' . PHP_EOL;
echo '<loc>https://pymex.com/datos</loc>' . PHP_EOL;
echo '<lasmod>2020-04-06</lasmod>';
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '<priority>1.0</priority>' . PHP_EOL;
echo '</url>' . PHP_EOL;

echo '<url>' . PHP_EOL;
echo '<loc>https://pymex.com/datos/home</loc>' . PHP_EOL;
echo '<lasmod>2020-04-06</lasmod>';
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '<priority>1.0</priority>' . PHP_EOL;
echo '</url>' . PHP_EOL;

while($row = mysqli_fetch_array($result))
{
 echo '<url>' . PHP_EOL;
 echo '<loc>'.$base_url. $row["empresa_slug"] .'</loc>' . PHP_EOL;
 echo '<lasmod>' .date('Y-m-d',strtotime($row["updated_at"])). '</lasmod>';
 echo '<changefreq>daily</changefreq>' . PHP_EOL;
 echo '<priority>1.0</priority>' . PHP_EOL;
 echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;

?>
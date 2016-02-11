<?php
header('Content-type: text/html');
$url=$_GET['url'];
$json=file_get_contents($url);
echo $json;
?>
<?php
$host = "localhost";
$user = "root";
$pw = "cumanacoa100";
$db = "sesiones";

#Coneccion a la base de datos
$con = mysql_connect($host,$user,$pw) or die ("Problemas al conectar");
mysql_select_db($db,$con) or die ("Problemas al conectar la DB");

?>
<?php
define('DB_HOST', '...');//DB_HOST:  generalmente suele ser "127.0.0.1"
define('DB_USER', '');//Usuario de tu base de datos
define('DB_PASS', '');//Contrase帽a del usuario de la base de datos
define('DB_NAME', '');//Nombre de la base de datos
 
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    mysqli_set_charset($con,'utf8');
?>
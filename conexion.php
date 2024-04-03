<?php
                  //Conexion a puerto y base de datos
function conexion()
{
    $host='localhost';
    $user='root';   
    $pass='';
    $db='productos';  // DB

    $conexion=mysqli_connect($host,$user,$pass,$db);

    return $conexion;
}

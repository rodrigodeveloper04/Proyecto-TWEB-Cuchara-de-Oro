<?php
    
    function Conexion(){
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "cuchara_de_oroo";
    $port = "3306";
  
    $con = mysqli_connect($hostname, $username, $password, $database, $port) or die("Error al conectar a la Base de Datos");
    return $con;
}

$conexion = Conexion();





<?php 

$conexion = mysqli_connect('localhost','root','1234','sencoe');

if ($conexion -> connect_error) {
    die ("Conexion fallida: " . $conn -> connect_error);
}

?>
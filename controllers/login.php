<?php 
include_once "../models/conexion.php";

$nombre = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username']=$nombre;

$sql = "SELECT * FROM usuario WHERE nomUsuario = '$nombre' AND passUsuario = '$password'";
$result = mysqli_query($conexion,$sql);

$rows = mysqli_num_rows($result);

if ($rows){
    echo 'Inicio de sesión exitoso.';
} else {
    echo 'Error en la autentificación';
} 

mysqli_free_result($result);

mysqli_close($conexion);

?>
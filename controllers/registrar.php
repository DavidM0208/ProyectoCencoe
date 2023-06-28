<?php 
include("../models/conexion.php");

if (isset($_POST['register'])){
    if (strlen($_POST['telCliente']) >= 1 && strlen($_POST['userCliente']) >= 1 ){
        $teleCliente = $_POST['telCliente'];
        $userCliente = $_POST['userCliente'];
        $consulta = "INSERT INTO cliente (userCliente, telCliente) VALUES '('$teleCliente', '$userCliente')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">¡Te has inscrito correctamente</h3>
            <?php
        } else{
            ?>
            <h3 class = "ok">¡No te has inscrito corectamente</h3>
            <?php
        }
        
    }else{
        ?>
        <h3 class = "bad">¡por favor conplete los datos </h3>
        <?php
    }
}
?>
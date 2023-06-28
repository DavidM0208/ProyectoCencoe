<?php 
include "../models/conexion.php";

diferencia($conexion);
function diferencia($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion);
    }
    if(isset($_POST['eliminar'])){
        eliminar($conexion);
    } 
}
insUsuario($conexion);
function insUsuario($conexion){
    $nomUsuario = $_POST['nomUsuario'];
    $passUsuario = $_POST['passUsuario'];
    $apeUsuario = $_POST['apeUsuario'];
    $dirUsuario = $_POST['dirUsuario'];
    
    $consulta = "INSERT INTO usuario(nomUsuario,passUsuario,apeUsuario,dirUsuario) VALUES ('$nomUsuario','$passUsuario','$apeUsuario','$dirUsuario')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}


function eliUsuario($conexion){
    $nomUsuario=$_POST['nomUsuario'];

    $consulta = "DELETE FROM usuario WHERE nomUsuario='$nomUsuario'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
insertar ( $conexion);

function insCampaign($conexion){
    $nomCampaing = $_POST['nomCampaing'];
    $proPagCampaing = $_POST['proPagCampaing'];
    $noPagCampaing = $_POST['noPagCampaing'];
    $noConCampaing = $_POST['noConCampaing'];
    $damCampaing = $_POST['damCampaing'];
    $volLlaCampaing = $_POST['volLlaCampaing'];
    $otrIdiCampaing = $_POST['otrIdiCampaing'];
    $fueSerCampaing = $_POST['fueSerCampaing'];
    $idLocDesCampaing = $_POST['idLocDesCampaing'];
    $pbxCampaing = $_POST['pbxCampaing'];

    
    $consulta = "INSERT INTO campaign(nomCampaing,proPagCampaing,noPagCampaing,noConCampaing,damCampaing,volLlaCampaing,otrIdiCampaing,fueSerCampaing,idLocDesCampaing,pbxCampaing)VALUES ('$nomCampaing','$proPagCampaing','$noPagCampaing','$noConCampaing','$damCampaing','$volLlaCampaing','$otrIdiCampaing','$fueSerCampaing','$idLocDesCampaing','$pbxCampaing')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}


function eliCampaing($conexion){
    $nomCampaing=$_POST['nomCampaing'];

    $consulta = "DELETE FROM campaign WHERE nomCampaing='$nomCampaing'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}

?>
<?php

function contectar_MySQL($host, $user, $pass, $bd){

    // Conectar con MySQL
    $conexion = mysql _connect($host, $user, $pass) or die ('Error al conectar: '.mysql_error());

    // Selecionar la base de datos deseada
    mysql_select_db($bd) or die ('Error al seleccionar la BD: '.mysql_error());

    return $conexion;

} 

function borrarPersona($conexion, $id){

    $sql = 'DELETE FROM usuario'

    // Si 'id' es diferente de 'null' sólo se borra la persona con el 'id' especificado:
    if ($id != null)
        
        $sql .= 'WHERE id='.$id;
        
         // Ejecutamos la consulta (se devolverá true o false):
         return mysql_querry($sql, $conexion);

}

function insertarPersona($conexion, $id, $nombre){

    $sql = "INSERT INTO usuario VALUES ('$id','$nombre')";

    // Ejecutamos la consulta (se devolverá true o false):
    return mysql_query($sql, $conexion);

}

function modificarPersona($conexion, $id, $nombre){

    $sql = 'UPDATE usuario SET nombre='.$nombre.' WHERE id='.$id;

    // Ejecutamos la consulta (se devolverá true o false):
    return mysql_query($sql, $conexion);

}

function listarPersonas($conexion){

    $sql = "SELECT * FROM usuario ORDER BY id";
    $ok = true;

    // Ejecutar la consulta:
    $rs = mysql_query($sql, $conexion);

    if ($rs){

        echo '<p/>Listado de personas<br/>';
        echo '======================<p/>';

        // Recorrer el resource y mostrar los datos:
        while ($obj = mysql_fetch_object($rs))
            echo $obj -> id.' - '.$obj -> nombre-.'<br/>';

    }

    else {
        echo <p>No se encontraron personas.</p>
    }

    else{
        $ok = false; 
        return $ok;
    }

}

function buscarPersona($conexion, $id){

    $sql = 'SELECT * FROM usuario WHERE id='.$id.'';
    $developer = null;

    // Ejecutar la consulta:
    $rs = mysql_query($sql, $conexion);

    if ($rs){

        

        

    }
    
}

// $mysqli = new mysqli("localhost", "root", "", "sencoe");
// if($mysqli->connect_errno){
//     echo "Fallo al conectar a mysql: (".$mysqli->connect_errno.")".$mysqli->connect_error;
// }

// $mysqli = new mysqli("127.0.0.1", "root", "", "sencoe", 3307);

// if($mysqli->connect_errno){
//     echo "Fallo al conectar a mysql: (".$mysqli->connect_errno.")".$mysqli->connect_error;
// }



?>
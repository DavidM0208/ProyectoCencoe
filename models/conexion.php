<?php 
$mysqli = new mysqli("localhost", "root", "", "sencoe");
if($mysqli->connect_errno){
    echo "Fallo al conectar a mysql: (".$mysqli->connect_errno.")".$mysqli->connect_error;
}


// $mysqli = new mysqli("127.0.0.1", "root", "", "sencoe", 3307);

// if($mysqli->connect_errno){
//     echo "Fallo al conectar a mysql: (".$mysqli->connect_errno.")".$mysqli->connect_error;
// }



?>
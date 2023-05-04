<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="Passw0rd";

    $bd="alumno";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>

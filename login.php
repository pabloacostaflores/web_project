<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "escom";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


if (!$conn) 
{
    die("No hay conexion: ".mysqli_connect_error());
}

$usuario = $_POST["usuario"];
$password = $_POST["pass"];
$query = mysqli_query($conn,"SELECT * FROM ADMINS WHERE admin_user = '".$usuario."' And admin_password = '".$password."'");
$numero_fila = mysqli_num_rows($query);

if ($numero_fila == 1){
    header("Location: crud.php");
    
}
else if ($numero_fila == 0){
    echo "Tus credenciales son invalidas";
}



?>
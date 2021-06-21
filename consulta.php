<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prueba";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) 
{
    die("No hay conexion: ".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-e quiv="content-type" content="text/html; charset=utf-8" />
    <title>ADMINISTRADOR</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style_crud.css">
    <!-- media queries -->
    <!-- <link rel="stylesheet" href="css/medium.css" media="(max-width: 630px)"> -->
   
    <link rel="shortcut icon" href="burrita.jpg">
</head>

<body>
    <!-- header with buttons -->
    <header>
    <div class="header">
        <span class="logo btnEs">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260" height="108" viewBox="0 0 140 110" style="position:absolute" class="svf">
            <polygon id="poliEs" points="50,0 0,100 150,100 200,0 " fill="white"/>
            </svg>
            <a href="https://www.escom.ipn.mx/" class="js-es">
                <img src="resources/img/escom.png" alt="escom-logo" class="logoimg">
            </a>
        </span>
        <span class="logo btnStudent">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260px" height="108" viewBox="0 0 140 110" style="position:absolute">
            <polygon id="poliStudent" class="js-lstudent" points="50,0 0,100 150,100 200,0 " fill="white" />
            </svg>
            <a href="index.html" class="js-student"><img src="resources/img/student.png" alt="alumno-logo" id="logoimg1"></a>
        </span>
        <span class="logo btnAdmin">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260" height="108" viewBox="0 0 140 110" style="position:absolute">
            <polygon id="poliAdmin" points="50,0 0,100 150,100 200,0 " fill="white"/>
            </svg>
            <a href="#" class="js-admin"><img src="resources/img/admin.png" alt="admin-logo" class="logoimg"></a>
        </span>
    </div>
</header>
<main class="contenedor-body">
    


<!--Registrar-->
<div class="Registrar">
    <div class="menu-mostrar contenedor-boton">
        <a href="registrar.php" class="bt-menu">
            <h3 class="centrar-texto fw-900">Registrar</h3>
        </a>  
       
    </div>
</div>
<!-- Consultar -->
    <div class="Consultas">
        <div class="menu-mostrar contenedor-boton">
            <a href="#consulta" class="bt-menu">
                <h3 class="centrar-texto fw-900">Consultar</h3>
            </a>  
          
        </div>
        <div class="mostrar" id="consulta">
<div class="form tabla-form">
            <!-- identidad -->
            <fieldset>
                <legend>Consulta General</legend>
<br>

<form method="POST" action="">
                
<br>             
   <button class="btnMain Espacio" style="float:center;" type="submit" formaction="crud.php#consulta">Volver</button>
   <br>                <button class="btnMain Espacio" style="float:center;" type="submit" formaction="">Consultar Todos</button>
</form>
</fieldset>
<br>
<br>
    <legend class="Tabla-Legend centrar-texto">Resultado</legend>
    <br>
<br>
    <table class="tabla">
        <colgroup span="4" class="columns"></colgroup>
        <tr>
  <th class="titulos">Boleta</th>
  <th class="titulos">Nombre</th>
  <th class="titulos">Apellido Paterno</th>
  <th class="titulos">Apellido Materno</th>
  <th class="titulos">CURP</th>
  <th class="titulos">Genero</th>
  <th class="titulos">Fecha de nacimiento</th>
  <th class="titulos">Estado</th>
  <th class="titulos">Delegación</th>
  <th class="titulos">Colonia</th>
  <th class="titulos">Dirección</th>
  <th class="titulos">CP</th>
  <th class="titulos">Telefono</th>
  <th class="titulos">Celular</th>
  <th class="titulos">E-mail</th>
  <th class="titulos">Escuela Procedencia</th>
  <th class="titulos">Entidad procedencia</th>
  <th class="titulos">Promedio</th>
  <th class="titulos">Opción</th>

</tr>

    <?php 
    $query = mysqli_query($conn,"SELECT * FROM datos ");
    
while($datos=mysqli_fetch_array($query)){
echo "<tr>";
   echo "<td>".$datos['Boleta']."</td>";
   echo "<td>".$datos['Nombre']."</td>";
   echo "<td>".$datos['ApellidoP']."</td>";
   echo "<td>".$datos['ApellidoM']."</td>";
   echo "<td>".$datos['CURP']."</td>";
   echo "<td>".$datos['Genero']."</td>";
   echo "<td>".$datos['fechanacimiento']."</td>";
   echo "<td>".$datos['Estado']."</td>";
   echo "<td>".$datos['Del']."</td>";
   echo "<td>".$datos['Col']."</td>";
   echo "<td>".$datos['Dir']."</td>";
   echo "<td>".$datos['Cp']."</td>";
   echo "<td>".$datos['Tel']."</td>";
   echo "<td>".$datos['Cel']."</td>";
   echo "<td>".$datos['Email']."</td>";
   echo "<td>".$datos['Escuelaproc']."</td>";
   echo "<td>".$datos['EntidadProc']."</td>";
   echo "<td>".$datos['Promedio']."</td>";
   echo "<td>".$datos['Opcion']."</td>";
   echo "</tr>";
}



    ?>

  

       
        
    </table>
    <br><br><br>


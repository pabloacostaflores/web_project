
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
        <a href="index.html" class="bt-menu">
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
                <legend>Consulta de alumno</legend>
<br>

<form method="POST" action="">
                <label for="pass">Matricula:</label> <input type="text" name="boleta" size="35" class="input-admin" placeholder="Ingresa la matricula">
<br>             
   <button class="btnMain Espacio" style="float:center;" type="submit">Consultar</button>
   <br>                <button class="btnMain Espacio" style="float:center;" type="submit">Consultar Todos</button>
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
<tr>
    <?php $Boleta=$_POST['boleta'];
    $query = mysqli_query($conn,"SELECT * FROM datos ");
    $datos=mysqli_fetch_array($query);    
    

    ?>

    <td><?php 
    if($datos!=null){
        echo $datos['Boleta'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['Nombre'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['ApellidoP'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['ApellidoM'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['CURP'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['Genero'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['fechanacimiento'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['Estado'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['Del'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos!=null){
        echo $datos['Col'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['Dir'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos!=null){
        echo $datos['Cp'] ;
    }else{
        echo "";
    }
    
    ?></td>
        <td><?php 
    if($datos!=null){
        echo $datos['Tel'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos!=null){
        echo $datos['Cel'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos!=null){
        echo $datos['Email'] ;
    }else{
        echo "";
    }
    
    ?></td>
        <td><?php 
    if($datos!=null){
        echo $datos['Escuelaproc'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos!=null){
        echo $datos['EntidadProc'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos!=null){
        echo $datos['Promedio'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos!=null){
        echo $datos['Opcion'] ;
    }else{
        echo "";
    }
    ?></td>
  
</tr>

       
        
    </table>
    <br><br><br>

<div id="consulta" class="menu-cerrar">
    <a href="" class="bt  d-block ">Cerrar</a>
      </div>
    </div>
    </div>
</div>
<!--Eliminar-->

<div class="Eliminar">
    <div class="menu-mostrar contenedor-boton">
        <a href="#eliminar" class="bt-menu">
            <h3 class="centrar-texto fw-900">Eliminar</h3>
        </a>  
       
    </div>
    <div class="mostrar" id="eliminar">
<div class="form tabla-form">
        <!-- identidad -->
        <fieldset>
            <legend>Remoción de alumno</legend>
<br>

<form method="POST" action="">
            <label for="pass">Matricula:</label> <input type="password" name="boleta1" size="35" class="input-admin" placeholder="Ingresa la matricula">
<br>             
<button class="btnMain Espacio" style="float:center;" type="submit">Buscar</button>
<br>                <button class="btnMain Espacio" style="float:center;" type="submit">Eliminar</button>

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
<tr>
<tr>
    <?php $Boleta1=$_POST['boleta1'];
    $query = mysqli_query($conn,"SELECT * FROM datos WHERE Boleta = '".$Boleta1."'");
    $datos=mysqli_fetch_array($query);?>

    
    <td><?php echo $datos['Boleta'] ?></td>
    <td><?php echo $datos['Nombre'] ?></td>
    <td><?php echo $datos['ApellidoP'] ?></td>
    <td><?php echo $datos['ApellidoM'] ?></td>
    <td><?php echo $datos['CURP'] ?></td>
    <td><?php echo $datos['Genero'] ?></td>
    <td><?php echo $datos['fechanacimiento'] ?></td>
    <td><?php echo $datos['Estado'] ?></td>
    <td><?php echo $datos['Del'] ?></td>
    <td><?php echo $datos['Col'] ?></td>
    <td><?php echo $datos['Dir'] ?></td>
    <td><?php echo $datos['Cp'] ?></td>
    <td><?php echo $datos['Tel'] ?></td>
    <td><?php echo $datos['Cel'] ?></td>
    <td><?php echo $datos['Email'] ?></td>
    <td><?php echo $datos['Escuelaproc'] ?></td>
    <td><?php echo $datos['EntidadProc'] ?></td>
    <td><?php echo $datos['Promedio'] ?></td>
    <td><?php echo $datos['Opcion'] ?></td>
</tr>

   
    
</table>
<br><br><br>

<div id="consulta" class="menu-cerrar">
<a href="" class="bt  d-block ">Cerrar</a>
  </div>
</div>
</div>
</div>
<!--Modificar-->
<div class="Modificacion">
    <div class="menu-mostrar contenedor-boton">
        <a href="#modificar" class="bt-menu">
            <h3 class="centrar-texto fw-900">Modificar</h3>
        </a>  
        
    </div>
    <div class="mostrar" id="modificar">
<div class="form tabla-form">
        <!-- identidad -->
        <fieldset>
            <legend>Modificación de alumno</legend>
<br>

<form method="POST" action="">
            <label for="pass">Matricula:</label> <input type="password" name="boleta2" size="35" class="input-admin" placeholder="Ingresa la matricula">
<br>             
<button class="btnMain Espacio" style="float:center;" type="submit">Buscar</button>
<br>                <button class="btnMain Espacio" style="float:center;" type="submit">Modificar</button>
<br>                <button class="btnMain Espacio" style="float:center;" type="submit">Guardar</button>
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
<tr>
<tr>
    <?php $Boleta2=$_POST['boleta2'];
    $query = mysqli_query($conn,"SELECT * FROM datos WHERE Boleta = '".$Boleta2."'");
    $datos=mysqli_fetch_array($query);?>

    
    <td><?php echo $datos['Boleta'] ?></td>
    <td><?php echo $datos['Nombre'] ?></td>
    <td><?php echo $datos['ApellidoP'] ?></td>
    <td><?php echo $datos['ApellidoM'] ?></td>
    <td><?php echo $datos['CURP'] ?></td>
    <td><?php echo $datos['Genero'] ?></td>
    <td><?php echo $datos['fechanacimiento'] ?></td>
    <td><?php echo $datos['Estado'] ?></td>
    <td><?php echo $datos['Del'] ?></td>
    <td><?php echo $datos['Col'] ?></td>
    <td><?php echo $datos['Dir'] ?></td>
    <td><?php echo $datos['Cp'] ?></td>
    <td><?php echo $datos['Tel'] ?></td>
    <td><?php echo $datos['Cel'] ?></td>
    <td><?php echo $datos['Email'] ?></td>
    <td><?php echo $datos['Escuelaproc'] ?></td>
    <td><?php echo $datos['EntidadProc'] ?></td>
    <td><?php echo $datos['Promedio'] ?></td>
    <td><?php echo $datos['Opcion'] ?></td>
</tr>

   
    
</table>
<br><br><br>

<div id="consulta" class="menu-cerrar">
<a href="" class="bt  d-block ">Cerrar</a>
  </div>
</div>
</div>
</div>
<br><br><br>


</main>
 
</body>

</html>
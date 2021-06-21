
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
$aux=0;
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
                <legend>Consulta de alumno</legend>
<br>

<form method="POST" action="">
                <label for="pass">Matricula:</label> <input type="text" name="boleta" size="35" class="input-admin" placeholder="Ingresa la matricula">
<br>             
   <button class="btnMain Espacio" style="float:center;" type="submit" >Consultar</button>
   <br>                <button class="btnMain Espacio" style="float:center;" type="submit" formaction="consulta.php#consulta">Consultar Todos</button>
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
    $query = mysqli_query($conn,"SELECT * FROM datos WHERE Boleta = '".$Boleta."'");
    $datos=mysqli_fetch_array($query);   
    

    ?>

    <td>
    <?php
    if($datos!=null){
        echo $datos['Boleta'] ;
    }else{
        echo "";
    }
    ?>
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
?>
</td>
  
</tr>

       
        
    </table>
    <br><br><br>

<div id="consulta" class="menu-cerrar">
    <a href="" class="bt  d-block ">Cerrar</a>
      </div>
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
            <label for="pass">Matricula:</label> <input type="text" name="boleta1" size="35" class="input-admin" placeholder="Ingresa la matricula">
<br>             
<button class="btnMain Espacio" style="float:center;" type="submit">Buscar</button>
<br>                <button class="btnMain Espacio" style="float:center;" type="submit" onclick="Saber()">Eliminar </button>

<script>
    function Saber(){
        
        <?php $aux=1?>
       
    }
   
</script>

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
    $query1 = mysqli_query($conn,"SELECT * FROM datos WHERE Boleta = '".$Boleta1."'");
    $datos1=mysqli_fetch_array($query1);   
    if($aux=1){
     
        $query2 = mysqli_query($conn,"DELETE FROM datos WHERE Boleta = '".$Boleta1."'");
       
    }
    ?>

    <td>
    <?php
    if($datos1!=null){
        echo $datos1['Boleta'] ;
    }else{
        echo "";
    }
    ?>
    <td><?php 
    if($datos1!=null){
        echo $datos1['Nombre'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['ApellidoP'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['ApellidoM'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['CURP'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['Genero'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['fechanacimiento'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['Estado'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['Del'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos1!=null){
        echo $datos1['Col'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['Dir'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos1!=null){
        echo $datos1['Cp'] ;
    }else{
        echo "";
    }
    
    ?></td>
        <td><?php 
    if($datos1!=null){
        echo $datos1['Tel'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos1!=null){
        echo $datos1['Cel'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos1!=null){
        echo $datos1['Email'] ;
    }else{
        echo "";
    }
    
    ?></td>
        <td><?php 
    if($datos1!=null){
        echo $datos1['Escuelaproc'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos1!=null){
        echo $datos1['EntidadProc'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos1!=null){
        echo $datos1['Promedio'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos1!=null){
        echo $datos1['Opcion'] ;
    }else{
        echo "";
    }
?></td>
   
    
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
            <label for="pass">Matricula:</label> <input name="boleta2" size="35" class="input-admin" placeholder="Ingresa la matricula">
<br>             
<button class="btnMain Espacio" style="float:center;" type="submit">Buscar</button>
<br>               
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
    $query2 = mysqli_query($conn,"SELECT * FROM datos WHERE Boleta = '".$Boleta2."'");
    $datos2=mysqli_fetch_array($query2);   
    

    ?>

    <td>
    <?php
    if($datos2!=null){
        echo $datos2['Boleta'] ;
    }else{
        echo "";
    }
    ?>
    <td><?php 
    if($datos2!=null){
        echo $datos2['Nombre'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['ApellidoP'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['ApellidoM'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['CURP'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['Genero'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['fechanacimiento'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['Estado'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['Del'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos2!=null){
        echo $datos2['Col'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['Dir'] ;
    }else{
        echo "";
    }
    ?></td>
    <td><?php 
    if($datos2!=null){
        echo $datos2['Cp'] ;
    }else{
        echo "";
    }
    
    ?></td>
        <td><?php 
    if($datos2!=null){
        echo $datos2['Tel'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos2!=null){
        echo $datos2['Cel'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos2!=null){
        echo $datos2['Email'] ;
    }else{
        echo "";
    }
    
    ?></td>
        <td><?php 
    if($datos2!=null){
        echo $datos2['Escuelaproc'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos2!=null){
        echo $datos2['EntidadProc'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos2!=null){
        echo $datos2['Promedio'] ;
    }else{
        echo "";
    }
    ?></td>
        <td><?php 
    if($datos2!=null){
        echo $datos2['Opcion'] ;
    }else{
        echo "";
    }
?></td>

   
    
</table>


<br><br><br>

<div id="consulta" class="menu-cerrar">
<a href="modificar.php?Boleta2=<?php echo $Boleta2?>" class="bt d-block">Modificar</a>
<br>
<a href="" class="bt  d-block ">Cerrar</a>
  </div>
</div>
</div>
</div>
<br><br><br>


</main>
 
</body>

</html>

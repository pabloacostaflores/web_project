<?php 
		
	$Num_Boleta = $_GET["numero_de_boleta"];
	$nombre = $_GET["nombre"];
	$ape_paterno = $_GET["apellido_paterno"];
	$ape_materno =$_GET["apellido_materno"];
	$CURP =$_GET["curp"];
	$genero =$_GET["genero"];
	$fecha_nacimiento =$_GET["bday"];
	$estado =$_GET["estado"];
	$delegacion =$_GET["Delegacion"];
	$calle =$_GET["Calle"];
	$colonia =$_GET["colonia"];
	$codigoP =$_GET["cp"];
	$tele_casa =$_GET["tel_casa"];
	$num_telefono =$_GET["celular"];
	$correo =$_GET["correo"];
	$escuela =$_GET["Escuela"];
	$entidad =$_GET["entidad_pro"];
	$promedio =$_GET["Promedio"];
	$opcion =$_GET["Opcion"];
	
	
	
	$conexion = mysqli_connect("localhost","root","","Proyecto");
	$sql_1= "(numBoleta, Nombre, ApePaterno, ApeMaterno, CURP, Genero,  FechaNacimiento, numBoleta, Estado, Delegacion, Calle, Colonia, CP, Telefono, Celular, Email, Escuela, Entidad, Promedio, Opcion)";
	$sql_2= "('$Num_Boleta', '$nombre', '$ape_paterno', '$ape_materno', '$CURP', '$genero', '$fecha_nacimiento', '$estado', '$delegacion', '$calle', '$colonia', '$codigoP', '$tele_casa', '$num_telefono', '$correo', '$entidad', '$promedio', '$opcion')";
	
	$sql = "INSERT INTO alumno $sql_1 VALUES $sql_2" ;
	
	mysqli_query($conexion, $sql);
		
?>	
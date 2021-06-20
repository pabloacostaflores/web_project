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



	$conexion = mysqli_connect("localhost","root","","escom");
	$sql_1= "(sudent_id, student_name, student_first_surname, student_second_surname, student_curp, student_gender, student_date_of_birth, student_state, student_municipality, student_street, student_neighborhood, student_postal_code, student_home_phone, student_phone_number, student_email, student_school_of_origin, student_state_of_origin, student_final_grades, student_escom_order)";
	$sql_2= "('$Num_Boleta', '$nombre', '$ape_paterno', '$ape_materno', '$CURP', '$genero', '$fecha_nacimiento', '$estado', '$delegacion', '$calle', '$colonia', '$codigoP', '$tele_casa', '$num_telefono', '$correo', '$entidad', '$promedio', '$opcion')";

	$sql = "INSERT INTO STUDENTS $sql_1 VALUES $sql_2" ;

	mysqli_query($conexion, $sql);

?>

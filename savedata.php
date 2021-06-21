<?php
		
	$Num_Boleta = $_POST["numero_de_boleta"];
	$nombre = $_POST["nombre"];
	$ape_paterno = $_POST["apellido_paterno"];
	$ape_materno =$_POST["apellido_materno"];
	$CURP =$_POST["curp"];
	$genero =$_POST["genero"];
	$fecha_nacimiento =$_POST["bday"];
	$estado =$_POST["estado"];
	$delegacion =$_POST["Delegacion"];
	$calle =$_POST["Calle"];
	$colonia =$_POST["colonia"];
	$codigoP =$_POST["cp"];
	$tele_casa =$_POST["tel_casa"];
	$num_telefono =$_POST["celular"];
	$correo =$_POST["correo"];
	$escuela =$_POST["Escuela"];
	$entidad =$_POST["entidad_pro"];
	$promedio =$_POST["Promedio"];
	$opcion =$_POST["Opcion"];


	$conexion = mysqli_connect("localhost","root","","escom");
	$sql_1= "(sudent_id, student_name, student_first_surname, student_second_surname, student_curp, student_gender, student_date_of_birth, student_state, student_municipality, student_street, student_neighborhood, student_postal_code, student_home_phone, student_phone_number, student_email, student_school_of_origin, student_state_of_origin, student_final_grades, student_escom_order)";
	$sql_2= "('$Num_Boleta', '$nombre', '$ape_paterno', '$ape_materno', '$CURP', '$genero', '$fecha_nacimiento', '$estado', '$delegacion', '$calle', '$colonia', '$codigoP', '$tele_casa', '$num_telefono', '$correo', '$entidad', '$promedio', '$opcion')";

	$sql = "INSERT INTO STUDENTS ".$sql_1." VALUES ".$sql_2;
	
	mysqli_query($conexion, $sql);
?>

<?php
		$Num_Boleta = $_GET["numero_de_boleta"];
		echo "$Num_Boleta\n";
		$nombre = $_GET["nombre"];
		echo "$nombre\n";
		$ape_paterno = $_GET["apellido_paterno"];
		echo "$ape_paterno\n";
		$ape_materno =$_GET["apellido_materno"];
		echo "$ape_materno\n";
		$CURP =$_GET["curp"];
		echo "$CURP\n";
		$genero =$_GET["genero"];
		echo "$genero\n";
		$fecha_nacimientoWOF = $_GET["bday"];
		$fecha_nacimiento = date("Y/m/d", strtotime($fecha_nacimientoWOF));
		echo "$fecha_nacimiento\n";
		$estado =$_GET["estado"];
		echo "$estado\n";
		$delegacion =$_GET["delegacion"];
		echo "$delegacion\n";
		$calle =$_GET["calle"];
		echo "$calle\n";
		$colonia =$_GET["colonia"];
		echo "$colonia\n";
		$codigoP =$_GET["cp"];
		echo "$codigoP\n";
		$tele_casa =$_GET["tel_casa"];
		echo "$tele_casa\n";
		$num_telefono =$_GET["celular"];
		echo "$num_telefono\n";
		$correo =$_GET["correo"];
		echo "$correo\n";
		$escuela =$_GET["escuela"];
		echo "$escuela\n";
		$entidad =$_GET["entidad_pro"];
		echo "$entidad\n";
		$promedio =$_GET["promedio"];
		echo "$promedio\n";
		$opcion =$_GET["opcion"];
		echo "$opcion\n";

		$conexion = mysqli_connect("localhost","root","","escom");
		$sql_1= "(sudent_id, student_name, student_first_surname, student_second_surname, student_curp, student_gender, student_date_of_birth, student_state, student_municipality, student_street, student_neighborhood, student_postal_code, student_home_phone, student_phone_number, student_email, student_school_of_origin, student_state_of_origin, student_final_grades, student_escom_order)";
		$sql_2= "('$Num_Boleta', '$nombre', '$ape_paterno', '$ape_materno', '$CURP', '$genero', '$fecha_nacimiento', '$estado', '$delegacion', '$calle', '$colonia', '$codigoP', '$tele_casa', '$num_telefono', '$correo', '$entidad', '$promedio', '$opcion')";

		$sql = "INSERT INTO STUDENTS $sql_1 VALUES $sql_2" ;

		mysqli_query($conexion, $sql);
?>

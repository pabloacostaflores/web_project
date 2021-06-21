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

	$Horario = new DateTime('2021-06-22 10:00:00');
	$intervalo = new DateInterval('PT1H45M');
	
	$res = mysqli_query($conexion, "SELECT * FROM TIMETABLE");
	$numfilas = mysqli_num_rows($res);
	echo $numfilas;
	$salir =false;
	
	for ($j = 1; $j <= 5; $j++) {
		for ($i = 1; $i <= 6; $i++) {
			$grupo= "LAB".$j.$i;
			$res_2 = mysqli_query($conexion, "SELECT * FROM TIMETABLE WHERE laboratory = '".$grupo."'");
			$filas_grupo = mysqli_num_rows($res_2);
			echo $grupo;
			echo $filas_grupo;
			echo "</br>";
			if($filas_grupo <25){
				echo "salimos del for";
				$salir =true;
				break;			
			}
		}
		if($salir){
			echo "salimos del 2for";
		break;			
		}
	$Horario->add($intervalo);
	}
	
	$string_horario = $Horario->format('Y-m-d H:i:s');
	
	$sql_21= "(student_id, laboratory, horary)";
	$sql_22= "('$Num_Boleta', '$grupo', '$string_horario')";
	$sql_2 = "INSERT INTO TIMETABLE ".$sql_21." VALUES ".$sql_22;
	mysqli_query($conexion, $sql_2);
?>

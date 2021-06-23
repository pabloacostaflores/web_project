<?php
	session_start();
	$Num_Boleta =  $_SESSION["boleta"];
	$nombre =$_SESSION["nombre"]; 
	$ape_paterno = $_SESSION["ape_paterno"];
	$ape_materno =	$_SESSION["ape_materno"]; 
	$CURP =$_SESSION["CURP"]; 
	$genero =$_SESSION["genero"]; 
	$fecha_nacimiento =$_SESSION["fecha_nacimiento"]; 
	$estado =$_SESSION["estado"]; 
	$delegacion =	$_SESSION["delegacion"];  
	$calle =$_SESSION["calle"];  
	$colonia =$_SESSION["colonia"];
	$codigoP =$_SESSION["codigoP"]; ;
	$tele_casa =$_SESSION["tele_casa"]; 
	$num_telefono =$_SESSION["num_telefono"];
	$correo =$_SESSION["correo"];
	$escuela =$_SESSION["escuela"];
	$entidad =$_SESSION["entidad"];
	$promedio =$_SESSION["promedio"];
	$opcion =$_SESSION["opcion"];
	

	$conexion = mysqli_connect("localhost","root","","escom");
	mysqli_query("SET NAMES 'utf8'");

	$sql_1= "(student_id, student_name, student_first_surname, student_second_surname, student_curp, student_gender, student_date_of_birth, student_state, student_municipality, student_street, student_neighborhood, student_postal_code, student_home_phone, student_phone_number, student_email, student_school_of_origin, student_state_of_origin, student_final_grade, student_escom_order)";
	$sql_2= "('$Num_Boleta', '$nombre', '$ape_paterno', '$ape_materno', '$CURP', '$genero', '$fecha_nacimiento', '$estado', '$delegacion', '$calle', '$colonia', '$codigoP', '$tele_casa', '$num_telefono', '$correo', '$escuela', '$entidad', '$promedio', '$opcion')";

	$sql = "INSERT INTO STUDENTS ".$sql_1." VALUES ".$sql_2;
	//echo $sql;
	mysqli_query($conexion, $sql);
		
	$Horario = new DateTime('2021-06-22 10:00:00');
	$intervalo = new DateInterval('PT1H45M');
	
	$res = mysqli_query($conexion, "SELECT * FROM TIMETABLE");
	$numfilas = mysqli_num_rows($res);
	//echo $numfilas;
	$salir =false;
	
	for ($j = 1; $j <= 5; $j++) {
		for ($i = 1; $i <= 6; $i++) {
			$grupo= "LAB".$j.$i;
			$res_2 = mysqli_query($conexion, "SELECT * FROM TIMETABLE WHERE laboratory = '".$grupo."'");
			$filas_grupo = mysqli_num_rows($res_2);
			if($filas_grupo <25){
				$salir =true;
				break;			
			}
		}
		if($salir){
			break;			
		}
	$Horario->add($intervalo);
	}
	
	$string_horario = $Horario->format('Y-m-d H:i:s');
	
	$sql_21= "(student_id, laboratory, horary)";
	$sql_22= "('$Num_Boleta', '$grupo', '$string_horario')";
	$sql_2 = "INSERT INTO TIMETABLE ".$sql_21." VALUES ".$sql_22;
	mysqli_query($conexion, $sql_2);
	
	
	echo '<script language="javascript">  alert("DATOS GUARDADOS");
	window.location.href="crud.php";</script>';
	
	session_destroy();	
?>

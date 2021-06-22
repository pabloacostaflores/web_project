<?php

echo '<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-e quiv="content-type" content="text/html; charset=utf-8" />
    <title>COMPROBAR DATOS</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- media queries -->
    <link rel="stylesheet" href="css/small.css" media="(max-width: 1000px)">
    <link rel="shortcut icon" href="resources/img/burrita.jpg">
</head>

<body>
    <!-- header with buttons -->
   <div class="header">
        <span class="logo">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260" height="108" viewBox="0 0 140 110" style="position:absolute">
            <polygon points="50,0 0,100 150,100 200,0 " fill="white"/>
            </svg>
            <a href="https://www.escom.ipn.mx/" class="js-es">
            <img src="resources/img/escom.png" alt="escom-logo" class="logoimg">
        </span>
        <span class="logo btnStudent">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260px" height="108" viewBox="0 0 140 110" style="position:absolute">
            <polygon id="poliStudent" class="js-lstudent" points="50,0 0,100 150,100 200,0 " fill="#6C1D45" />
            </svg>
            <a href="#" class="js-student"><img src="resources/img/student.png" alt="alumno-logo" id="logoimg1"></a>
        </span>
        <span class="logo btnAdmin">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260" height="108" viewBox="0 0 140 110" style="position:absolute">
            <polygon id="poliAdmin" points="50,0 0,100 150,100 200,0 " fill="rgba(207, 205, 205, 0.795)"/>
            </svg>
            <a href="login.html" class="js-admin"><img src="resources/img/admin.png" alt="admin-logo" class="logoimg"></a>
        </span>';
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
	
	
	echo '<script language="javascript">  alert("DATOS GUARDADOS, NO OLVIDES GENERAR TU PDF");
	window.location.href="index.html";</script>';
	
	session_destroy();	
?>

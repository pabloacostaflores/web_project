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
        <span class="logo btnAdmin">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260" height="108" viewBox="0 0 140 110" style="position:absolute">
            <polygon id="poliAdmin" points="50,0 0,100 150,100 200,0 " fill="rgba(207, 205, 205, 0.795)"/>
            </svg>
            <a href="login.html" class="js-admin"><img src="resources/img/admin.png" alt="admin-logo" class="logoimg"></a>
        </span>
    </div>
    <!-- form -->"
	
	
	
    <div id="particles-js" class="fondoForm"></div>
    <div class="form">
        <form action="./savedata_admin.php">
            <!-- identidad -->
            <fieldset>
                <legend>Verifica que los datos sean correctos</legend>
<br>';
	session_start();
    $_SESSION["boleta"]= $_POST["numero_de_boleta"];
	$_SESSION["nombre"] = $_POST["nombre"];
	$_SESSION["ape_paterno"] = $_POST["apellido_paterno"];
	$_SESSION["ape_materno"] =$_POST["apellido_materno"];
	$_SESSION["CURP"] =$_POST["curp"];
	$_SESSION["genero"] =$_POST["genero"];
	$_SESSION["fecha_nacimiento"] =$_POST["bday"];
	$_SESSION["estado"] =$_POST["estado"];	
	$_SESSION["delegacion"] =$_POST["delegacion"];
	$_SESSION["calle"] =$_POST["calle"];
	$_SESSION["colonia"] =$_POST["colonia"];
	$_SESSION["codigoP"] =$_POST["cp"];
	$_SESSION["tele_casa"] =$_POST["tel_casa"];
	$_SESSION["num_telefono"] =$_POST["celular"];
	$_SESSION["correo"] =$_POST["correo"];
	$_SESSION["escuela"] =$_POST["escuela_pro"];
	$_SESSION["entidad"] =$_POST["entidad_pro"];
	$_SESSION["promedio"] =$_POST["promedio"];
	$_SESSION["opcion"] =$_POST["opcion"];
	
	echo "Boleta: ". $_SESSION["boleta"]."</br>";
	echo "Nombre: ".$_SESSION["nombre"]."</br>";
	echo "Apellido Paterno: ".$_SESSION["ape_paterno"]."</br>";
	echo "Apellido Materno: ".$_SESSION["ape_materno"]."</br>";
	echo "CURP: ".$_SESSION["CURP"]."</br>";
	echo "Género: ".$_SESSION["genero"]."</br>";
	echo "Fecha de nacimiento: ".$_SESSION["fecha_nacimiento"]."</br>";
	echo "Estado: ".$_SESSION["estado"]."</br>";
	echo "Delegación/Municipio: ".$_SESSION["delegacion"]."</br>";
	echo "Calle: ".$_SESSION["calle"]."</br>";
	echo "Colonia: ".$_SESSION["colonia"]."</br>";
	echo "CP: ".$_SESSION["codigoP"]."</br>";
	echo "Teléfono de casa: ".$_SESSION["tele_casa"]."</br>";
	echo "Teléfono celular: ".$_SESSION["num_telefono"]."</br>";	
	echo "Correo: ".$_SESSION["correo"]."</br>";	
	echo "Escuela de procedencia: ".$_SESSION["escuela"]."</br>";
	echo "Entidad de procedencia: ".$_SESSION["entidad"]."</br>";
	echo "Promedio: ".$_SESSION["promedio"]."</br>";
	echo "Opción: ".$_SESSION["opcion"]."</br>";
              
echo'
<br>                <button class="btnMain Espacio;" style="float:left;" type="submit">GUARDAR DATOS</button>
					<button type="button" class="btnMain Espacio;" style="float:right;" onclick="window.history.back()">REGRESAR</button>
            </fieldset>

			</form>
      
        <!-- particles -->
    <script src="scripts/particles.js"></script>
    <script src="scripts/app.js"></script>
</body>

</html>' ;




?>

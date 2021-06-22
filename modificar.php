
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "escom";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) 
{
    die("No hay conexion: ".mysqli_connect_error());
}
$aux=0;
$Boleta2=$_GET["Boleta2"];

?>
<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-e quiv="content-type" content="text/html; charset=utf-8" />
    <title>TITULO</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- media queries -->
    <!-- <link rel="stylesheet" href="css/medium.css" media="(max-width: 630px)"> -->
    <link rel="stylesheet" href="css/small.css" media="(max-width: 1015px)">
    <link rel="shortcut icon" href="resources/img/burrita.jpg">
    <link rel="stylesheet" href="css/style_crud.css">
</head>
<body>
    <!-- header with buttons -->
    <header>
    <div class="header">
<h1 class="centrar-texto fw-400">Modificacion de alumnos</h1>
    </div>
</header>
    <!-- form -->
    <div id="particles-js" class="fondoForm"></div>
    <div class="form">
        <form>
            <?php 
            $query = mysqli_query($conn,"SELECT * FROM STUDENTS WHERE student_id = '".$Boleta2."'");
            $datos=mysqli_fetch_array($query);
            ?>   
            
            <!-- identidad -->
            <fieldset>
                <legend>Identidad</legend>
    
                <p>No. Boleta:<input type="text" name="numero_de_boleta" size="35" class="input" placeholder="Ingresa tu boleta" value=<?php echo $datos['student_id'] ?>>
            </p>
                <p>Nombre:<input type="text" name="nombre" size="35" class="input" placeholder="Ingresa tu nombre" value=<?php echo $datos['student_name'] ?>></p>
                <p>Apellido Paterno:<input type="text" name="apellido_paterno" size="35" class = "input" placeholder="Ingresa tu apellido paterno" value=<?php echo $datos['student_first_surname'] ?>></p>
                <p>Apellido Materno:<input type="text" name="apellido materno" size="35" class="input" placeholder="Ingresa tu apellido materno" value=<?php echo $datos['student_second_surname'] ?>></p>
                <p>CURP:<input type="text" style="text-transform:uppercase;" name="curp " size="35" class="input" placeholder="Ingresa curp" value=<?php echo $datos['student_curp'] ?>></p>
                <div id="gen">
                    <label for="genero">Genero:</label>
                    <span class="custom-select" style="width: 200px;">
                        <select name="genero" >
                            <option value="" disabled selected>Selecciona tu opcion</option>
                            <option value="Masculino" <?php if($datos['student_gender']=='Masculino') echo 'selected="selected"';?>>Masculino</option>
                            <option value="Femenino" <?php if($datos['student_gender']=='Femenino') echo 'selected="selected"';?>>Femenino</option>
                            <option value="Otro" <?php if($datos['student_gender']=='Otro') echo 'selected="selected"';?> >Otro</option>
                        </select>
                    </span>
                </div>
                <div id="nac">
                    <label for="fechanacimiento">Fecha de nacimiento:</label>
                    <input name="fecha" type="date" class="custom-date-field" value=<?php echo $datos['student_date_of_birth'] ?>/>
                </div>
            </fieldset>
            <!-- contacto -->

            <fieldset>
                <legend>Contacto</legend>
                    <p style="width: 349px;">Estado:<span class="custom-select" style="width: 200px;">
                        <select name="student_state">
                            <option value="" disabled selected>Selecciona tu opcion</option>
                            <option value="AGU " <?php if($datos['student_state']=='AGU') echo 'selected="selected"';?>>Aguascalientes </option>
                            <option value="BC " <?php if($datos['student_state']=='BC') echo 'selected="selected"';?>>Baja California </option>
                            <option value="BCS " <?php if($datos['student_state']=='BCS') echo 'selected="selected"';?>>Baja California Sur </option>
                            <option value="CAM " <?php if($datos['student_state']=='CAM') echo 'selected="selected"';?>>Campeche </option>
                            <option value="CDMX" <?php if($datos['student_state']=='CDMX') echo 'selected="selected"';?>>Ciudad de México </option>
                            <option value="COA " <?php if($datos['student_state']=='COA') echo 'selected="selected"';?>>Coahuila de Zaragoza </option>
                            <option value="COM " <?php if($datos['student_state']=='COM') echo 'selected="selected"';?>>Colima </option>
                            <option value="CHP " <?php if($datos['student_state']=='CHP') echo 'selected="selected"';?>>Chiapas </option>
                            <option value="CHH " <?php if($datos['student_state']=='CHH') echo 'selected="selected"';?>>Chihuahua </option>
                            <option value="DUR " <?php if($datos['student_state']=='DUR') echo 'selected="selected"';?>>Durango </option>
                            <option value="MEX " <?php if($datos['student_state']=='MEX') echo 'selected="selected"';?>>student_state de México </option>
                            <option value="GUA " <?php if($datos['student_state']=='GUA') echo 'selected="selected"';?>>Guanajuato </option>
                            <option value="GUE " <?php if($datos['student_state']=='GUE') echo 'selected="selected"';?>>Guerrero </option>
                            <option value="HID " <?php if($datos['student_state']=='HID') echo 'selected="selected"';?>>Hidalgo </option>
                            <option value="JAL " <?php if($datos['student_state']=='JAL') echo 'selected="selected"';?>>Jalisco </option>
                            <option value="MIC " <?php if($datos['student_state']=='MIC') echo 'selected="selected"';?>>Michoacán de Ocampo </option>
                            <option value="MOR " <?php if($datos['student_state']=='MOR') echo 'selected="selected"';?>>Morelos </option>
                            <option value="NAY " <?php if($datos['student_state']=='NAY') echo 'selected="selected"';?>>Nayarit </option>
                            <option value="NL " <?php if($datos['student_state']=='NL') echo 'selected="selected"';?>>Nuevo León </option>
                            <option value="OAX " <?php if($datos['student_state']=='OAX') echo 'selected="selected"';?>>Oaxaca </option>
                            <option value="PUE " <?php if($datos['student_state']=='PUE') echo 'selected="selected"';?>>Puebla </option>
                            <option value="QUE " <?php if($datos['student_state']=='QUE') echo 'selected="selected"';?>>Querétaro </option>
                            <option value="QR " <?php if($datos['student_state']=='QR') echo 'selected="selected"';?>>Quintana Roo </option>
                            <option value="SLP " <?php if($datos['student_state']=='SLP') echo 'selected="selected"';?>>San Luis Potosí </option>
                            <option value="SIN " <?php if($datos['student_state']=='SIN') echo 'selected="selected"';?>>Sinaloa </option>
                            <option value="SON " <?php if($datos['student_state']=='SON') echo 'selected="selected"';?>>Sonora </option>
                            <option value="TAB " <?php if($datos['student_state']=='TAB') echo 'selected="selected"';?>>Tabasco </option>
                            <option value="TAM " <?php if($datos['student_state']=='TAM') echo 'selected="selected"';?>>Tamaulipas </option>
                            <option value="noexiste <?php if($datos['student_state']=='noexiste') echo 'selected="selected"';?>">Tlaxcala </option>
                            <option value="VER " <?php if($datos['student_state']=='VER') echo 'selected="selected"';?>>Veracruz  </option>
                            <option value="YUC " <?php if($datos['student_state']=='YUC') echo 'selected="selected"';?>>Yucatán </option>
                            <option value="ZAC " <?php if($datos['student_state']=='ZAC') echo 'selected="selected"';?>>Zacatecas </option>
                        </select>
                    </span></p>
                    <p>Delegacion/Municipio:<input type="text" name="Delegacion" size="35" class="input" placeholder="Ingresa tu Delegacion/Municipio" value=<?php echo $datos['student_municipality'] ?>></p>
                    <p>Colonia:<input type="text" name="Col" size="35" class="input" placeholder="Ingresa tu colonia" value=<?php echo $datos['student_neighborhood'] ?>></p>
                    <p>Direccion de la calle:<input type="text" name="Calle" size="35" class="input" placeholder="Ingresa tu calle, numero, lt, mzn" value=<?php echo $datos['student_street'] ?>></p>
                    <p>Codigo Postal:<input type="text" name="cp" size="35" class="input" placeholder="Ingresa tu codigo postal" value=<?php echo $datos['student_postal_code'] ?>></p>
                    <p>Telefono de casa:<input type="text" name="tel" size="35" class="input" placeholder="Ingresa tu numero de casa" value=<?php echo $datos['student_home_phone'] ?>></p>
                    <p>Celular:<input type="text" name="cel" size="35" class="input" placeholder="Ingresa tu telefono celular" value=<?php echo $datos['student_phone_number'] ?>></p>
                    <p>Email:<input type="text" name="correo" size="35" class="input" placeholder="Ingresa tu correo electronico" value=<?php echo $datos['student_email'] ?>></p>
    
            </fieldset>
    
            <!-- Procedencia -->
    
            <fieldset>
                <legend>Procedencia:</legend>
                <p>Ingresa tu escuela de procedencia: 
                <span class="custom-select" style="width: 200px;">
                    <select name="Escuela">
                        <option value="" disabled selected>Selecciona tu opcion</option>
                        <option value="cecyt1" <?php if($datos['student_school_of_origin']=='cecyt1') echo 'selected="selected"';?>>Cecyt #1 "Gonzalo Vázquez Vela"</option>
                        <option value="cecyt2" <?php if($datos['student_school_of_origin']=='cecyt2') echo 'selected="selected"';?>>Cecyt #2 "Miguel Bernard Perales"</option>
                        <option value="cecyt3" <?php if($datos['student_school_of_origin']=='cecyt3') echo 'selected="selected"';?>>Cecyt #3 "Estanislao Ramirez Ruíz"</option>
                        <option value="cecyt4" <?php if($datos['student_school_of_origin']=='cecyt4') echo 'selected="selected"';?>>Cecyt #4 "Lázaro Cárdenas del Río"</option>
                        <option value="cecyt5" <?php if($datos['student_school_of_origin']=='cecyt5') echo 'selected="selected"';?>>Cecyt #5 "Benito Juárez"</option>
                        <option value="cecyt6" <?php if($datos['student_school_of_origin']=='cecyt6') echo 'selected="selected"';?>>Cecyt #6 "Miguel Othon de Mendizábal"</option>
                        <option value="cecyt7" <?php if($datos['student_school_of_origin']=='cecyt7') echo 'selected="selected"';?>>Cecyt #7 "Cuauhtémoc"</option>
                        <option value="cecyt8" <?php if($datos['student_school_of_origin']=='cecyt8') echo 'selected="selected"';?>>Cecyt #8 "Narciso Bassols"</option>
                        <option value="cecyt9" <?php if($datos['student_school_of_origin']=='cecyt9') echo 'selected="selected"';?>>Cecyt #9 "Juan de Dios Bátiz Paredes"</option>
                        <option value="cecyt10" <?php if($datos['student_school_of_origin']=='cecyt10') echo 'selected="selected"';?>>Cecyt #10 "Carlos Vallejo Márquez"</option>
                        <option value="cecyt11" <?php if($datos['student_school_of_origin']=='cecyt11') echo 'selected="selected"';?>>Cecyt #11 "Wilfrido Massieu"</option>
                        <option value="cecyt12" <?php if($datos['student_school_of_origin']=='cecyt12') echo 'selected="selected"';?>>Cecyt #12 "José María Morelos"</option>
                        <option value="cecyt13" <?php if($datos['student_school_of_origin']=='cecyt13') echo 'selected="selected"';?>>Cecyt #13 "Ricardo Flores Magón"</option>
                        <option value="cecyt14" <?php if($datos['student_school_of_origin']=='cecyt14') echo 'selected="selected"';?>>Cecyt #14 "Luis Enrique Erro Soler"</option>
                        <option value="cecyt15" <?php if($datos['student_school_of_origin']=='cecyt15') echo 'selected="selected"';?>>Cecyt #15 "Diódoro Antúnez Echegaray"</option>
                        <option value="cecyt16" <?php if($datos['student_school_of_origin']=='cecyt16') echo 'selected="selected"';?>>Cecyt #16 "Hidalgo"</option>
                        <option value="cecyt17" <?php if($datos['student_school_of_origin']=='cecyt17') echo 'selected="selected"';?>>Cecyt #17 "León, Guanajuato"</option>
                        <option value="cecyt18" <?php if($datos['student_school_of_origin']=='cecyt18') echo 'selected="selected"';?>>Cecyt #18 "Zacatecas"</option>
                        <option value="cecyt19" <?php if($datos['student_school_of_origin']=='cecyt19') echo 'selected="selected"';?>>Cecyt #19 "Leona Vicario"</option>
                        <option value="cet1 " <?php if($datos['student_school_of_origin']=='cet1') echo 'selected="selected"';?>>CET 1 "Walter Cross Buchanan"</option>
                        <option value="otro " <?php if($datos['student_school_of_origin']=='otro') echo 'selected="selected"';?>>Otro </option>
                    </select>
                </span></p>

                <p>Ingresa tu entidad federativa de procedencia:<span class="custom-select" style="width: 200px;">
                    <select name="E_proc">
                    <option value="" disabled selected>Selecciona tu opcion</option>
                            <option value="AGU " <?php if($datos['student_state_of_origin']=='AGU') echo 'selected="selected"';?>>Aguascalientes </option>
                            <option value="BC " <?php if($datos['student_state_of_origin']=='BC') echo 'selected="selected"';?>>Baja California </option>
                            <option value="BCS " <?php if($datos['student_state_of_origin']=='BCS') echo 'selected="selected"';?>>Baja California Sur </option>
                            <option value="CAM " <?php if($datos['student_state_of_origin']=='CAM') echo 'selected="selected"';?>>Campeche </option>
                            <option value="CDMX" <?php if($datos['student_state_of_origin']=='CDMX') echo 'selected="selected"';?>>Ciudad de México </option>
                            <option value="COA " <?php if($datos['student_state_of_origin']=='COA') echo 'selected="selected"';?>>Coahuila de Zaragoza </option>
                            <option value="COM " <?php if($datos['student_state_of_origin']=='COM') echo 'selected="selected"';?>>Colima </option>
                            <option value="CHP " <?php if($datos['student_state_of_origin']=='CHP') echo 'selected="selected"';?>>Chiapas </option>
                            <option value="CHH " <?php if($datos['student_state_of_origin']=='CHH') echo 'selected="selected"';?>>Chihuahua </option>
                            <option value="DUR " <?php if($datos['student_state_of_origin']=='DUR') echo 'selected="selected"';?>>Durango </option>
                            <option value="MEX " <?php if($datos['student_state_of_origin']=='MEX') echo 'selected="selected"';?>>Estado de México </option>
                            <option value="GUA " <?php if($datos['student_state_of_origin']=='GUA') echo 'selected="selected"';?>>Guanajuato </option>
                            <option value="GUE " <?php if($datos['student_state_of_origin']=='GUE') echo 'selected="selected"';?>>Guerrero </option>
                            <option value="HID " <?php if($datos['student_state_of_origin']=='HID') echo 'selected="selected"';?>>Hidalgo </option>
                            <option value="JAL " <?php if($datos['student_state_of_origin']=='JAL') echo 'selected="selected"';?>>Jalisco </option>
                            <option value="MIC " <?php if($datos['student_state_of_origin']=='MIC') echo 'selected="selected"';?>>Michoacán de Ocampo </option>
                            <option value="MOR " <?php if($datos['student_state_of_origin']=='MOR') echo 'selected="selected"';?>>Morelos </option>
                            <option value="NAY " <?php if($datos['student_state_of_origin']=='NAY') echo 'selected="selected"';?>>Nayarit </option>
                            <option value="NL " <?php if($datos['student_state_of_origin']=='NL') echo 'selected="selected"';?>>Nuevo León </option>
                            <option value="OAX " <?php if($datos['student_state_of_origin']=='OAX') echo 'selected="selected"';?>>Oaxaca </option>
                            <option value="PUE " <?php if($datos['student_state_of_origin']=='PUE') echo 'selected="selected"';?>>Puebla </option>
                            <option value="QUE " <?php if($datos['student_state_of_origin']=='QUE') echo 'selected="selected"';?>>Querétaro </option>
                            <option value="QR " <?php if($datos['student_state_of_origin']=='QR') echo 'selected="selected"';?>>Quintana Roo </option>
                            <option value="SLP " <?php if($datos['student_state_of_origin']=='SLP') echo 'selected="selected"';?>>San Luis Potosí </option>
                            <option value="SIN " <?php if($datos['student_state_of_origin']=='SIN') echo 'selected="selected"';?>>Sinaloa </option>
                            <option value="SON " <?php if($datos['student_state_of_origin']=='SON') echo 'selected="selected"';?>>Sonora </option>
                            <option value="TAB " <?php if($datos['student_state_of_origin']=='TAB') echo 'selected="selected"';?>>Tabasco </option>
                            <option value="TAM " <?php if($datos['student_state_of_origin']=='TAM') echo 'selected="selected"';?>>Tamaulipas </option>
                            <option value="noexiste <?php if($datos['student_state_of_origin']=='noexiste') echo 'selected="selected"';?>">Tlaxcala </option>
                            <option value="VER " <?php if($datos['student_state_of_origin']=='VER') echo 'selected="selected"';?>>Veracruz  </option>
                            <option value="YUC " <?php if($datos['student_state_of_origin']=='YUC') echo 'selected="selected"';?>>Yucatán </option>
                            <option value="ZAC " <?php if($datos['student_state_of_origin']=='ZAC') echo 'selected="selected"';?>>Zacatecas </option>
                    </select>
                </span></p>
                
                <p> Promedio: 
                <input type="number"  id="prom" name="Promedio" min="1" max="10" value="1" step="0.01" value=<?php echo $datos['student_final_grade'] ?>/></p>
                <div id="gen">
                    <label for="genero">Escom fue tu:</label>
                    <span class="custom-select" style="width: 200px;">
                        <select name="opcion">
                            <option value="" disabled selected>Selecciona tu opcion</option>
                            <option value="1Opcion">1ra Opción</option>
                            <option value="2Opcion">2da Opción</option>
                            <option value="3Opcion">3er Opción</option>
                            <option value="4Opcion">4ta Opción</option>
                            
                        </select>
                    </span>
                </div>
    
            </fieldset>
    
            <!-- Botones -->
            <button class="btnMain js-enviar" style="float:left;" formaction="crud.php#modificar" onclick="Update()">Enviar</button>
            <script>
                function Update(){
                    <?php $aux=1?>
                    $boleta_aux=$_POST['numero_de_boleta']
                    $nombre=$_POST['nombre']
                    $ap=$_POST['apellido_paterno']
                    $am=$_POST['apellido_materno']
                    $curp=$_POST['curp']
                    $genero_1=$_POST['genero']
                    $fecha=$_POST['fecha']
                    $estado=$_POST['Estado']
                    $Delegacion=$_POST['Delegacion']
                    $Col=$_POST['Col']
                    $Dir=$_POST['Calle']
                    $cp=$_POST['cp']
                    $tel=$_POST['tel']
                    $cel=$_POST['cel']
                    $correo=$_POST['correo']
                    $Escuela=$_POST['Escuela']
                    $E_proc=$_POST['E_proc']
                    $Promedio=$_POST['Promedio']
                    $opcion=$_POST['opcion']

                }
            </script>
  
            <button class="btnMain js-limpiar" style="float:right;" formaction="crud.php#modificar">Volver</button>
            <div class="clearfix"></div>
        </form>.
        <!-- form global -->
    </div>
    <!-- footer -->
    <div class="footer">
    </div>
    <script src="scripts/selector.js"></script>
    <script src="scripts/buttons.js"></script>
    <!-- particles -->
    <script src="scripts/particles.js"></script>
    <script src="scripts/app.js"></script>
</body>

</html>

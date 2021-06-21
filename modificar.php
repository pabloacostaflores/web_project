
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
            $query = mysqli_query($conn,"SELECT * FROM datos WHERE Boleta = '".$Boleta2."'");
            $datos=mysqli_fetch_array($query);
            ?>   
            
            <!-- identidad -->
            <fieldset>
                <legend>Identidad</legend>
    
                <p>No. Boleta:<input type="text" name="numero_de_boleta" size="35" class="input" placeholder="Ingresa tu boleta" value=<?php echo $datos['Boleta'] ?>>
           
            </p>
                <p>Nombre:<input type="text" name="nombre" size="35" class="input" placeholder="Ingresa tu nombre" value=<?php echo $datos['Nombre'] ?>></p>
                <p>Apellido Paterno:<input type="text" name="apellido_paterno" size="35" class = "input" placeholder="Ingresa tu apellido paterno" value=<?php echo $datos['ApellidoP'] ?>></p>
                <p>Apellido Materno:<input type="text" name="apellido materno" size="35" class="input" placeholder="Ingresa tu apellido materno" value=<?php echo $datos['ApellidoM'] ?>></p>
                <p>CURP:<input type="text" style="text-transform:uppercase;" name="curp " size="35" class="input" placeholder="Ingresa curp" value=<?php echo $datos['CURP'] ?>></p>
                <div id="gen">
                    <label for="genero">Genero:</label>
                    <span class="custom-select" style="width: 200px;">
                        <select name="genero" >
                            <option value="" disabled selected>Selecciona tu opcion</option>
                            <option value="Masculino" <?php if($datos['Genero']=='Masculino') echo 'selected="selected"';?>>Masculino</option>
                            <option value="Femenino" <?php if($datos['Genero']=='Femenino') echo 'selected="selected"';?>>Femenino</option>
                            <option value="Otro" <?php if($datos['Genero']=='Otro') echo 'selected="selected"';?> >Otro</option>
                        </select>
                    </span>
                </div>
                <div id="nac">
                    <label for="fechanacimiento">Fecha de nacimiento:</label>
                    <input name="fecha" type="date" class="custom-date-field" value=<?php echo $datos['fechanacimiento'] ?>/>
                </div>
            </fieldset>
            <!-- contacto -->

            <fieldset>
                <legend>Contacto</legend>
                    <p style="width: 349px;">Estado:<span class="custom-select" style="width: 200px;">
                        <select name="Estado">
                            <option value="" disabled selected>Selecciona tu opcion</option>
                            <option value="AGU " <?php if($datos['Estado']=='AGU') echo 'selected="selected"';?>>Aguascalientes </option>
                            <option value="BC " <?php if($datos['Estado']=='BC') echo 'selected="selected"';?>>Baja California </option>
                            <option value="BCS " <?php if($datos['Estado']=='BCS') echo 'selected="selected"';?>>Baja California Sur </option>
                            <option value="CAM " <?php if($datos['Estado']=='CAM') echo 'selected="selected"';?>>Campeche </option>
                            <option value="CDMX" <?php if($datos['Estado']=='CDMX') echo 'selected="selected"';?>>Ciudad de México </option>
                            <option value="COA " <?php if($datos['Estado']=='COA') echo 'selected="selected"';?>>Coahuila de Zaragoza </option>
                            <option value="COM " <?php if($datos['Estado']=='COM') echo 'selected="selected"';?>>Colima </option>
                            <option value="CHP " <?php if($datos['Estado']=='CHP') echo 'selected="selected"';?>>Chiapas </option>
                            <option value="CHH " <?php if($datos['Estado']=='CHH') echo 'selected="selected"';?>>Chihuahua </option>
                            <option value="DUR " <?php if($datos['Estado']=='DUR') echo 'selected="selected"';?>>Durango </option>
                            <option value="MEX " <?php if($datos['Estado']=='MEX') echo 'selected="selected"';?>>Estado de México </option>
                            <option value="GUA " <?php if($datos['Estado']=='GUA') echo 'selected="selected"';?>>Guanajuato </option>
                            <option value="GUE " <?php if($datos['Estado']=='GUE') echo 'selected="selected"';?>>Guerrero </option>
                            <option value="HID " <?php if($datos['Estado']=='HID') echo 'selected="selected"';?>>Hidalgo </option>
                            <option value="JAL " <?php if($datos['Estado']=='JAL') echo 'selected="selected"';?>>Jalisco </option>
                            <option value="MIC " <?php if($datos['Estado']=='MIC') echo 'selected="selected"';?>>Michoacán de Ocampo </option>
                            <option value="MOR " <?php if($datos['Estado']=='MOR') echo 'selected="selected"';?>>Morelos </option>
                            <option value="NAY " <?php if($datos['Estado']=='NAY') echo 'selected="selected"';?>>Nayarit </option>
                            <option value="NL " <?php if($datos['Estado']=='NL') echo 'selected="selected"';?>>Nuevo León </option>
                            <option value="OAX " <?php if($datos['Estado']=='OAX') echo 'selected="selected"';?>>Oaxaca </option>
                            <option value="PUE " <?php if($datos['Estado']=='PUE') echo 'selected="selected"';?>>Puebla </option>
                            <option value="QUE " <?php if($datos['Estado']=='QUE') echo 'selected="selected"';?>>Querétaro </option>
                            <option value="QR " <?php if($datos['Estado']=='QR') echo 'selected="selected"';?>>Quintana Roo </option>
                            <option value="SLP " <?php if($datos['Estado']=='SLP') echo 'selected="selected"';?>>San Luis Potosí </option>
                            <option value="SIN " <?php if($datos['Estado']=='SIN') echo 'selected="selected"';?>>Sinaloa </option>
                            <option value="SON " <?php if($datos['Estado']=='SON') echo 'selected="selected"';?>>Sonora </option>
                            <option value="TAB " <?php if($datos['Estado']=='TAB') echo 'selected="selected"';?>>Tabasco </option>
                            <option value="TAM " <?php if($datos['Estado']=='TAM') echo 'selected="selected"';?>>Tamaulipas </option>
                            <option value="noexiste <?php if($datos['Estado']=='noexiste') echo 'selected="selected"';?>">Tlaxcala </option>
                            <option value="VER " <?php if($datos['Estado']=='VER') echo 'selected="selected"';?>>Veracruz  </option>
                            <option value="YUC " <?php if($datos['Estado']=='YUC') echo 'selected="selected"';?>>Yucatán </option>
                            <option value="ZAC " <?php if($datos['Estado']=='ZAC') echo 'selected="selected"';?>>Zacatecas </option>
                        </select>
                    </span></p>
                    <p>Delegacion/Municipio:<input type="text" name="Delegacion" size="35" class="input" placeholder="Ingresa tu Delegacion/Municipio" value=<?php echo $datos['Del'] ?>></p>
                    <p>Colonia:<input type="text" name="Col" size="35" class="input" placeholder="Ingresa tu colonia" value=<?php echo $datos['Col'] ?>></p>
                    <p>Direccion de la calle:<input type="text" name="Calle" size="35" class="input" placeholder="Ingresa tu calle, numero, lt, mzn" value=<?php echo $datos['Dir'] ?>></p>
                    <p>Codigo Postal:<input type="text" name="cp" size="35" class="input" placeholder="Ingresa tu codigo postal" value=<?php echo $datos['Cp'] ?>></p>
                    <p>Telefono de casa:<input type="text" name="tel" size="35" class="input" placeholder="Ingresa tu numero de casa" value=<?php echo $datos['Tel'] ?>></p>
                    <p>Celular:<input type="text" name="cel" size="35" class="input" placeholder="Ingresa tu telefono celular" value=<?php echo $datos['Cel'] ?>></p>
                    <p>Email:<input type="text" name="correo" size="35" class="input" placeholder="Ingresa tu correo electronico" value=<?php echo $datos['Email'] ?>></p>
    
            </fieldset>
    
            <!-- Procedencia -->
    
            <fieldset>
                <legend>Procedencia:</legend>
                <p>Ingresa tu escuela de procedencia: 
                <span class="custom-select" style="width: 200px;">
                    <select name="Escuela">
                        <option value="" disabled selected>Selecciona tu opcion</option>
                        <option value="cecyt1" <?php if($datos['Escuelaproc']=='cecyt1') echo 'selected="selected"';?>>Cecyt #1 "Gonzalo Vázquez Vela"</option>
                        <option value="cecyt2" <?php if($datos['Escuelaproc']=='cecyt2') echo 'selected="selected"';?>>Cecyt #2 "Miguel Bernard Perales"</option>
                        <option value="cecyt3" <?php if($datos['Escuelaproc']=='cecyt3') echo 'selected="selected"';?>>Cecyt #3 "Estanislao Ramirez Ruíz"</option>
                        <option value="cecyt4" <?php if($datos['Escuelaproc']=='cecyt4') echo 'selected="selected"';?>>Cecyt #4 "Lázaro Cárdenas del Río"</option>
                        <option value="cecyt5" <?php if($datos['Escuelaproc']=='cecyt5') echo 'selected="selected"';?>>Cecyt #5 "Benito Juárez"</option>
                        <option value="cecyt6" <?php if($datos['Escuelaproc']=='cecyt6') echo 'selected="selected"';?>>Cecyt #6 "Miguel Othon de Mendizábal"</option>
                        <option value="cecyt7" <?php if($datos['Escuelaproc']=='cecyt7') echo 'selected="selected"';?>>Cecyt #7 "Cuauhtémoc"</option>
                        <option value="cecyt8" <?php if($datos['Escuelaproc']=='cecyt8') echo 'selected="selected"';?>>Cecyt #8 "Narciso Bassols"</option>
                        <option value="cecyt9" <?php if($datos['Escuelaproc']=='cecyt9') echo 'selected="selected"';?>>Cecyt #9 "Juan de Dios Bátiz Paredes"</option>
                        <option value="cecyt10" <?php if($datos['Escuelaproc']=='cecyt10') echo 'selected="selected"';?>>Cecyt #10 "Carlos Vallejo Márquez"</option>
                        <option value="cecyt11" <?php if($datos['Escuelaproc']=='cecyt11') echo 'selected="selected"';?>>Cecyt #11 "Wilfrido Massieu"</option>
                        <option value="cecyt12" <?php if($datos['Escuelaproc']=='cecyt12') echo 'selected="selected"';?>>Cecyt #12 "José María Morelos"</option>
                        <option value="cecyt13" <?php if($datos['Escuelaproc']=='cecyt13') echo 'selected="selected"';?>>Cecyt #13 "Ricardo Flores Magón"</option>
                        <option value="cecyt14" <?php if($datos['Escuelaproc']=='cecyt14') echo 'selected="selected"';?>>Cecyt #14 "Luis Enrique Erro Soler"</option>
                        <option value="cecyt15" <?php if($datos['Escuelaproc']=='cecyt15') echo 'selected="selected"';?>>Cecyt #15 "Diódoro Antúnez Echegaray"</option>
                        <option value="cecyt16" <?php if($datos['Escuelaproc']=='cecyt16') echo 'selected="selected"';?>>Cecyt #16 "Hidalgo"</option>
                        <option value="cecyt17" <?php if($datos['Escuelaproc']=='cecyt17') echo 'selected="selected"';?>>Cecyt #17 "León, Guanajuato"</option>
                        <option value="cecyt18" <?php if($datos['Escuelaproc']=='cecyt18') echo 'selected="selected"';?>>Cecyt #18 "Zacatecas"</option>
                        <option value="cecyt19" <?php if($datos['Escuelaproc']=='cecyt19') echo 'selected="selected"';?>>Cecyt #19 "Leona Vicario"</option>
                        <option value="cet1 " <?php if($datos['Escuelaproc']=='cet1') echo 'selected="selected"';?>>CET 1 "Walter Cross Buchanan"</option>
                        <option value="otro " <?php if($datos['Escuelaproc']=='otro') echo 'selected="selected"';?>>Otro </option>
                    </select>
                </span></p>

                <p>Ingresa tu entidad federativa de procedencia:<span class="custom-select" style="width: 200px;">
                    <select name="E_proc">
                    <option value="" disabled selected>Selecciona tu opcion</option>
                            <option value="AGU " <?php if($datos['EntidadProc']=='AGU') echo 'selected="selected"';?>>Aguascalientes </option>
                            <option value="BC " <?php if($datos['EntidadProc']=='BC') echo 'selected="selected"';?>>Baja California </option>
                            <option value="BCS " <?php if($datos['EntidadProc']=='BCS') echo 'selected="selected"';?>>Baja California Sur </option>
                            <option value="CAM " <?php if($datos['EntidadProc']=='CAM') echo 'selected="selected"';?>>Campeche </option>
                            <option value="CDMX" <?php if($datos['EntidadProc']=='CDMX') echo 'selected="selected"';?>>Ciudad de México </option>
                            <option value="COA " <?php if($datos['EntidadProc']=='COA') echo 'selected="selected"';?>>Coahuila de Zaragoza </option>
                            <option value="COM " <?php if($datos['EntidadProc']=='COM') echo 'selected="selected"';?>>Colima </option>
                            <option value="CHP " <?php if($datos['EntidadProc']=='CHP') echo 'selected="selected"';?>>Chiapas </option>
                            <option value="CHH " <?php if($datos['EntidadProc']=='CHH') echo 'selected="selected"';?>>Chihuahua </option>
                            <option value="DUR " <?php if($datos['EntidadProc']=='DUR') echo 'selected="selected"';?>>Durango </option>
                            <option value="MEX " <?php if($datos['EntidadProc']=='MEX') echo 'selected="selected"';?>>Estado de México </option>
                            <option value="GUA " <?php if($datos['EntidadProc']=='GUA') echo 'selected="selected"';?>>Guanajuato </option>
                            <option value="GUE " <?php if($datos['EntidadProc']=='GUE') echo 'selected="selected"';?>>Guerrero </option>
                            <option value="HID " <?php if($datos['EntidadProc']=='HID') echo 'selected="selected"';?>>Hidalgo </option>
                            <option value="JAL " <?php if($datos['EntidadProc']=='JAL') echo 'selected="selected"';?>>Jalisco </option>
                            <option value="MIC " <?php if($datos['EntidadProc']=='MIC') echo 'selected="selected"';?>>Michoacán de Ocampo </option>
                            <option value="MOR " <?php if($datos['EntidadProc']=='MOR') echo 'selected="selected"';?>>Morelos </option>
                            <option value="NAY " <?php if($datos['EntidadProc']=='NAY') echo 'selected="selected"';?>>Nayarit </option>
                            <option value="NL " <?php if($datos['EntidadProc']=='NL') echo 'selected="selected"';?>>Nuevo León </option>
                            <option value="OAX " <?php if($datos['EntidadProc']=='OAX') echo 'selected="selected"';?>>Oaxaca </option>
                            <option value="PUE " <?php if($datos['EntidadProc']=='PUE') echo 'selected="selected"';?>>Puebla </option>
                            <option value="QUE " <?php if($datos['EntidadProc']=='QUE') echo 'selected="selected"';?>>Querétaro </option>
                            <option value="QR " <?php if($datos['EntidadProc']=='QR') echo 'selected="selected"';?>>Quintana Roo </option>
                            <option value="SLP " <?php if($datos['EntidadProc']=='SLP') echo 'selected="selected"';?>>San Luis Potosí </option>
                            <option value="SIN " <?php if($datos['EntidadProc']=='SIN') echo 'selected="selected"';?>>Sinaloa </option>
                            <option value="SON " <?php if($datos['EntidadProc']=='SON') echo 'selected="selected"';?>>Sonora </option>
                            <option value="TAB " <?php if($datos['EntidadProc']=='TAB') echo 'selected="selected"';?>>Tabasco </option>
                            <option value="TAM " <?php if($datos['EntidadProc']=='TAM') echo 'selected="selected"';?>>Tamaulipas </option>
                            <option value="noexiste <?php if($datos['EntidadProc']=='noexiste') echo 'selected="selected"';?>">Tlaxcala </option>
                            <option value="VER " <?php if($datos['EntidadProc']=='VER') echo 'selected="selected"';?>>Veracruz  </option>
                            <option value="YUC " <?php if($datos['EntidadProc']=='YUC') echo 'selected="selected"';?>>Yucatán </option>
                            <option value="ZAC " <?php if($datos['EntidadProc']=='ZAC') echo 'selected="selected"';?>>Zacatecas </option>
                    </select>
                </span></p>
                
                <p> Promedio: 
                <input type="number"  id="prom" name="Promedio" min="1" max="10" value="1" step="0.01" value=<?php echo $datos['Promedio'] ?>/></p>
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

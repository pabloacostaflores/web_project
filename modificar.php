
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
<h1 class="centrar-texto fw-400">Modificación de alumnos</h1>
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
                    <label for="genero">Género:</label>
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
                    <input name="fecha" type="date" class="custom-date-field" value=<?php $datosaux = $datos['student_date_of_birth'];
                         $newDate =  date($datosaux);
                         echo $newDate;
                    ?>/>
                </div>
            </fieldset>
            <!-- contacto -->

            <fieldset>
                <legend>Contacto</legend>
                    <p style="width: 349px;">Estado:<span class="custom-select" style="width: 200px;">
                        <select name="student_state">
                            <option value="" disabled selected>Selecciona tu opción</option>
                            <option value="Aguascalientes" <?php if($datos['student_state']=='Aguascalientes') echo 'selected="selected"';?>>Aguascalientes </option>
                            <option value="Baja California" <?php if($datos['student_state']=='Baja California') echo 'selected="selected"';?>>Baja California </option>
                            <option value="Baja California Sur" <?php if($datos['student_state']=='BCS') echo 'selected="selected"';?>>Baja California Sur </option>
                            <option value="Campeche" <?php if($datos['student_state']=='Campeche') echo 'selected="selected"';?>>Campeche </option>
                            <option value="Ciudad de México" <?php if($datos['student_state']=='Ciudad de México') echo 'selected="selected"';?>>Ciudad de México </option>
                            <option value="Coahuila de Zaragoza" <?php if($datos['student_state']=='Coahuila de Zaragoza') echo 'selected="selected"';?>>Coahuila de Zaragoza </option>
                            <option value="Colima" <?php if($datos['student_state']=='Colima') echo 'selected="selected"';?>>Colima </option>
                            <option value="Chiapas" <?php if($datos['student_state']=='Chiapas') echo 'selected="selected"';?>>Chiapas </option>
                            <option value="Chihuahua" <?php if($datos['student_state']=='Chihuahua') echo 'selected="selected"';?>>Chihuahua </option>
                            <option value="Durango" <?php if($datos['student_state']=='Durango') echo 'selected="selected"';?>>Durango </option>
                            <option value="Estado de México" <?php if($datos['student_state']=='Estado de México') echo 'selected="selected"';?>>Estado de México </option>
                            <option value="Guanajuato" <?php if($datos['student_state']=='Guanajuato') echo 'selected="selected"';?>>Guanajuato </option>
                            <option value="Guerrero" <?php if($datos['student_state']=='Guerrero') echo 'selected="selected"';?>>Guerrero </option>
                            <option value="Hidalgo" <?php if($datos['student_state']=='Hidalgo') echo 'selected="selected"';?>>Hidalgo </option>
                            <option value="Jalisco" <?php if($datos['student_state']=='Jalisco') echo 'selected="selected"';?>>Jalisco </option>
                            <option value="Michoacán de Ocampo" <?php if($datos['student_state']=='Michoacán de Ocampo') echo 'selected="selected"';?>>Michoacán de Ocampo </option>
                            <option value="Morelos" <?php if($datos['student_state']=='Morelos') echo 'selected="selected"';?>>Morelos </option>
                            <option value="Nayarit" <?php if($datos['student_state']=='Nayarit') echo 'selected="selected"';?>>Nayarit </option>
                            <option value="Nuevo León" <?php if($datos['student_state']=='Nuevo León') echo 'selected="selected"';?>>Nuevo León </option>
                            <option value="Oaxaca" <?php if($datos['student_state']=='Oaxaca') echo 'selected="selected"';?>>Oaxaca </option>
                            <option value="Puebla" <?php if($datos['student_state']=='Puebla') echo 'selected="selected"';?>>Puebla </option>
                            <option value="Querétaro" <?php if($datos['student_state']=='Querétaro') echo 'selected="selected"';?>>Querétaro </option>
                            <option value="Quintana Roo" <?php if($datos['student_state']=='Quintana Roo') echo 'selected="selected"';?>>Quintana Roo </option>
                            <option value="San Luis Potosí" <?php if($datos['student_state']=='San Luis Potosí') echo 'selected="selected"';?>>San Luis Potosí </option>
                            <option value="Sinaloa" <?php if($datos['student_state']=='Sinaloa') echo 'selected="selected"';?>>Sinaloa </option>
                            <option value="Sonora" <?php if($datos['student_state']=='Sonora') echo 'selected="selected"';?>>Sonora </option>
                            <option value="Tabasco" <?php if($datos['student_state']=='Tabasco') echo 'selected="selected"';?>>Tabasco </option>
                            <option value="Tamaulipas" <?php if($datos['student_state']=='Tamaulipas') echo 'selected="selected"';?>>Tamaulipas </option>
                            <option value="Tlaxcala" <?php if($datos['student_state']=='Tlaxcala') echo 'selected="selected"';?>">Tlaxcala </option>
                            <option value="Veracruz" <?php if($datos['student_state']=='Veracruz') echo 'selected="selected"';?>>Veracruz  </option>
                            <option value="Yucatán" <?php if($datos['student_state']=='Yucatán') echo 'selected="selected"';?>>Yucatán </option>
                            <option value="Zacatecas" <?php if($datos['student_state']=='Zacatecas') echo 'selected="selected"';?>>Zacatecas </option>
                        </select>
                    </span></p>
                    <p>Delegación/Municipio:<input type="text" name="Delegacion" size="35" class="input" placeholder="Ingresa tu Delegacion/Municipio" value=<?php echo $datos['student_municipality'] ?>></p>
                    <p>Colonia:<input type="text" name="Col" size="35" class="input" placeholder="Ingresa tu colonia" value=<?php echo $datos['student_neighborhood'] ?>></p>
                    <p>Dirección de la calle:<input type="text" name="Calle" size="35" class="input" placeholder="Ingresa tu calle, numero, lt, mzn" value=<?php echo $datos['student_street'] ?>></p>
                    <p>Código Postal:<input type="text" name="cp" size="35" class="input" placeholder="Ingresa tu codigo postal" value=<?php echo $datos['student_postal_code'] ?>></p>
                    <p>Teléfono de casa:<input type="text" name="tel" size="35" class="input" placeholder="Ingresa tu numero de casa" value=<?php echo $datos['student_home_phone'] ?>></p>
                    <p>Celular:<input type="text" name="cel" size="35" class="input" placeholder="Ingresa tu telefono celular" value=<?php echo $datos['student_phone_number'] ?>></p>
                    <p>Email:<input type="text" name="correo" size="35" class="input" placeholder="Ingresa tu correo electronico" value=<?php echo $datos['student_email'] ?>></p>
    
            </fieldset>
    
            <!-- Procedencia -->
    
            <fieldset>
                <legend>Procedencia:</legend>
                <p>Ingresa tu escuela de procedencia: 
                <span class="custom-select" style="width: 200px;">
                    <select name="Escuela">
                        <option value="" disabled selected>Selecciona tu opción</option>
                        <option value="Cecyt #1 Gonzalo Vázquez Vela" <?php if($datos['student_school_of_origin']=='Cecyt #1 Gonzalo Vázquez Vela') echo 'selected="selected"';?>>Cecyt #1 "Gonzalo Vázquez Vela"</option>
                        <option value="Cecyt #2 Miguel Bernard Perales" <?php if($datos['student_school_of_origin']=='Cecyt #2 Miguel Bernard Perales') echo 'selected="selected"';?>>Cecyt #2 "Miguel Bernard Perales"</option>
                        <option value="Cecyt #3 Estanislao Ramírez Ruíz" <?php if($datos['student_school_of_origin']=='Cecyt #3 Estanislao Ramírez Ruíz') echo 'selected="selected"';?>>Cecyt #3 "Estanislao Ramirez Ruíz"</option>
                        <option value="Cecyt #4 Lázaro Cárdenas del Río" <?php if($datos['student_school_of_origin']=='Cecyt #4 Lázaro Cárdenas del Río') echo 'selected="selected"';?>>Cecyt #4 "Lázaro Cárdenas del Río"</option>
                        <option value="Cecyt #5 Benito Juárez" <?php if($datos['student_school_of_origin']=='Cecyt #5 Benito Juárez') echo 'selected="selected"';?>>Cecyt #5 "Benito Juárez"</option>
                        <option value="Cecyt #6 Miguel Othón de Mendizábal" <?php if($datos['student_school_of_origin']=='Cecyt #6 Miguel Othón de Mendizábal') echo 'selected="selected"';?>>Cecyt #6 "Miguel Othon de Mendizábal"</option>
                        <option value="Cecyt #7 Cuauhtémoc" <?php if($datos['student_school_of_origin']=='Cecyt #7 Cuauhtémoc') echo 'selected="selected"';?>>Cecyt #7 "Cuauhtémoc"</option>
                        <option value="Cecyt #8 Narciso Bassols" <?php if($datos['student_school_of_origin']=='Cecyt #8 Narciso Bassols') echo 'selected="selected"';?>>Cecyt #8 "Narciso Bassols"</option>
                        <option value="Cecyt #9 Juan de Dios Bátiz Paredes" <?php if($datos['student_school_of_origin']=='cecytCecyt #9 Juan de Dios Bátiz Paredes9') echo 'selected="selected"';?>>Cecyt #9 "Juan de Dios Bátiz Paredes"</option>
                        <option value="Cecyt #10 Carlos Vallejo Márquez" <?php if($datos['student_school_of_origin']=='Cecyt #10 Carlos Vallejo Márquez') echo 'selected="selected"';?>>Cecyt #10 "Carlos Vallejo Márquez"</option>
                        <option value="Cecyt #11 Wilfrido Massieu" <?php if($datos['student_school_of_origin']=='Cecyt #11 Wilfrido Massieu') echo 'selected="selected"';?>>Cecyt #11 "Wilfrido Massieu"</option>
                        <option value="Cecyt #12 José María Morelos" <?php if($datos['student_school_of_origin']=='Cecyt #12 José María Morelos') echo 'selected="selected"';?>>Cecyt #12 "José María Morelos"</option>
                        <option value="Cecyt #13 Ricardo Flores Magón" <?php if($datos['student_school_of_origin']=='Cecyt #13 Ricardo Flores Magón') echo 'selected="selected"';?>>Cecyt #13 "Ricardo Flores Magón"</option>
                        <option value="Cecyt #14 Luis Enrique Erro Soler" <?php if($datos['student_school_of_origin']=='Cecyt #14 Luis Enrique Erro Soler') echo 'selected="selected"';?>>Cecyt #14 "Luis Enrique Erro Soler"</option>
                        <option value="Cecyt #15 Diódoro Antúnez Echegaray" <?php if($datos['student_school_of_origin']=='Cecyt #15 Diódoro Antúnez Echegaray') echo 'selected="selected"';?>>Cecyt #15 "Diódoro Antúnez Echegaray"</option>
                        <option value="Cecyt #16 Hidalgo" <?php if($datos['student_school_of_origin']=='Cecyt #16 Hidalgo') echo 'selected="selected"';?>>Cecyt #16 "Hidalgo"</option>
                        <option value="Cecyt #17 León, Guanajuato" <?php if($datos['student_school_of_origin']=='Cecyt #17 León, Guanajuato') echo 'selected="selected"';?>>Cecyt #17 "León, Guanajuato"</option>
                        <option value="Cecyt #18 Zacatecas" <?php if($datos['student_school_of_origin']=='Cecyt #18 Zacatecas') echo 'selected="selected"';?>>Cecyt #18 "Zacatecas"</option>
                        <option value="Cecyt #19 Leona Vicario" <?php if($datos['student_school_of_origin']=='Cecyt #19 Leona Vicario') echo 'selected="selected"';?>>Cecyt #19 "Leona Vicario"</option>
                        <option value="CET 1 Walter Cross Buchanan" <?php if($datos['student_school_of_origin']=='CET 1 Walter Cross Buchanan') echo 'selected="selected"';?>>CET 1 "Walter Cross Buchanan"</option>
                        <option value="Otro " <?php if($datos['student_school_of_origin']=='Otro') echo 'selected="selected"';?>>Otro </option>
                    </select>
                </span></p>

                <p>Ingresa tu entidad federativa de procedencia:<span class="custom-select" style="width: 200px;">
                    <select name="E_proc">
                    <option value="" disabled selected>Selecciona tu opción</option>
                            <option value="Aguascalientes" <?php if($datos['student_state_of_origin']=='Aguascalientes') echo 'selected="selected"';?>>Aguascalientes </option>
                            <option value="Baja California" <?php if($datos['student_state_of_origin']=='Baja California') echo 'selected="selected"';?>>Baja California </option>
                            <option value="Baja California Sur" <?php if($datos['student_state_of_origin']=='BCS') echo 'selected="selected"';?>>Baja California Sur </option>
                            <option value="Campeche" <?php if($datos['student_state_of_origin']=='Campeche') echo 'selected="selected"';?>>Campeche </option>
                            <option value="Ciudad de México" <?php if($datos['student_state_of_origin']=='Ciudad de México') echo 'selected="selected"';?>>Ciudad de México </option>
                            <option value="Coahuila de Zaragoza" <?php if($datos['student_state_of_origin']=='Coahuila de Zaragoza') echo 'selected="selected"';?>>Coahuila de Zaragoza </option>
                            <option value="Colima" <?php if($datos['student_state_of_origin']=='Colima') echo 'selected="selected"';?>>Colima </option>
                            <option value="Chiapas" <?php if($datos['student_state_of_origin']=='Chiapas') echo 'selected="selected"';?>>Chiapas </option>
                            <option value="Chihuahua" <?php if($datos['student_state_of_origin']=='Chihuahua') echo 'selected="selected"';?>>Chihuahua </option>
                            <option value="Durango" <?php if($datos['student_state_of_origin']=='Durango') echo 'selected="selected"';?>>Durango </option>
                            <option value="Estado de México" <?php if($datos['student_state_of_origin']=='Estado de México') echo 'selected="selected"';?>>Estado de México </option>
                            <option value="Guanajuato" <?php if($datos['student_state_of_origin']=='Guanajuato') echo 'selected="selected"';?>>Guanajuato </option>
                            <option value="Guerrero" <?php if($datos['student_state_of_origin']=='Guerrero') echo 'selected="selected"';?>>Guerrero </option>
                            <option value="Hidalgo" <?php if($datos['student_state_of_origin']=='Hidalgo') echo 'selected="selected"';?>>Hidalgo </option>
                            <option value="Jalisco" <?php if($datos['student_state_of_origin']=='Jalisco') echo 'selected="selected"';?>>Jalisco </option>
                            <option value="Michoacán de Ocampo" <?php if($datos['student_state_of_origin']=='Michoacán de Ocampo') echo 'selected="selected"';?>>Michoacán de Ocampo </option>
                            <option value="Morelos" <?php if($datos['student_state_of_origin']=='Morelos') echo 'selected="selected"';?>>Morelos </option>
                            <option value="Nayarit" <?php if($datos['student_state_of_origin']=='Nayarit') echo 'selected="selected"';?>>Nayarit </option>
                            <option value="Nuevo León" <?php if($datos['student_state_of_origin']=='Nuevo León') echo 'selected="selected"';?>>Nuevo León </option>
                            <option value="Oaxaca" <?php if($datos['student_state_of_origin']=='Oaxaca') echo 'selected="selected"';?>>Oaxaca </option>
                            <option value="Puebla" <?php if($datos['student_state_of_origin']=='Puebla') echo 'selected="selected"';?>>Puebla </option>
                            <option value="Querétaro" <?php if($datos['student_state_of_origin']=='Querétaro') echo 'selected="selected"';?>>Querétaro </option>
                            <option value="Quintana Roo" <?php if($datos['student_state_of_origin']=='Quintana Roo') echo 'selected="selected"';?>>Quintana Roo </option>
                            <option value="San Luis Potosí" <?php if($datos['stustudent_state_of_origindent_state']=='San Luis Potosí') echo 'selected="selected"';?>>San Luis Potosí </option>
                            <option value="Sinaloa" <?php if($datos['student_state_of_origin']=='Sinaloa') echo 'selected="selected"';?>>Sinaloa </option>
                            <option value="Sonora" <?php if($datos['student_state_of_origin']=='Sonora') echo 'selected="selected"';?>>Sonora </option>
                            <option value="Tabasco" <?php if($datos['student_state_of_origin']=='Tabasco') echo 'selected="selected"';?>>Tabasco </option>
                            <option value="Tamaulipas" <?php if($datos['student_state_of_origin']=='Tamaulipas') echo 'selected="selected"';?>>Tamaulipas </option>
                            <option value="Tlaxcala" <?php if($datos['student_state_of_origin']=='Tlaxcala') echo 'selected="selected"';?>">Tlaxcala </option>
                            <option value="Veracruz" <?php if($datos['student_state_of_origin']=='Yucatán') echo 'selected="selected"';?>>Veracruz  </option>
                            <option value="Yucatán" <?php if($datos['student_state_of_origin']=='Yucatán') echo 'selected="selected"';?>>Yucatán </option>
                            <option value="Zacatecas" <?php if($datos['student_state_of_origin']=='Zacatecas') echo 'selected="selected"';?>>Zacatecas </option>
                    </select>
                </span></p>
                
                <p> Promedio: 
                <input type="number"  id="prom" name="Promedio" min="1" max="10" step="0.01" value=<?php echo $datos['student_final_grade'];?>></p>
                <div id="gen">
                    <label for="genero">ESCOM fue tu:</label>
                    <span class="custom-select" style="width: 200px;">
                        <select name="opcion">
                            <option value="" disabled selected>Selecciona tu opcion</option>
                            <option value="1 Opción" <?php if($datos['student_escom_order']=='1 Opción') echo 'selected="selected"';?>>1ra Opción</option>
                            <option value="2 Opción" <?php if($datos['student_escom_order']=='2 Opción') echo 'selected="selected"';?>>2da Opción</option>
                            <option value="3 Opción" <?php if($datos['student_escom_order']=='3 Opción') echo 'selected="selected"';?>>3er Opción</option>
                            <option value="4 Opción" <?php if($datos['student_escom_order']=='4 Opción') echo 'selected="selected"';?>>4ta Opción</option>
                            
                        </select>
                    </span>
                </div>
    
            </fieldset>
    
            <!-- Botones -->
            <button class="btnMain js-enviar" style="float:left;" formaction="crud.php#modificar" onclick="Update()">Enviar</button>
            <script>
                function Update(){
                    <?php $aux=1;
                   
                    if($aux == 1){
                    $student_id=$_POST['numero_de_boleta'];
                    $student_name=$_POST['nombre'];
                    $student_first_surname=$_POST['apellido_paterno'];
                    $student_second_surname=$_POST['apellido_materno'];
                    $student_curp=$_POST['curp'];
                    $student_date_of_birth=$_POST['fecha'];
                    $student_gender=$_POST['genero'];
                    $student_state=$_POST['Estado'];
                    $student_municipality=$_POST['Delegacion'];
                    $student_neighborhood=$_POST['Col'];
                    $student_street=$_POST['Calle'];
                    $student_postal_code=$_POST['cp'];
                    $student_home_phone=$_POST['tel'];
                    $student_phone_number=$_POST['cel'];
                    $student_email=$_POST['correo'];
                    $student_school_of_origin=$_POST['Escuela'];
                    $student_state_of_origin=$_POST['E_proc'];
                    $student_final_grade=$_POST['Promedio'];
                    $student_escom_order=$_POST['opcion'];
                   
                    $query_lo = mysqli_query($conn,"UPDATE students SET student_id='".$student_id."', student_name='".$student_name."', student_first_surname='".$student_first_surname."', student_second_surname='".$student_second_surname."', student_curp='".$student_curp."', student_date_of_birth='".$student_date_of_birth."', student_gender='".$student_gender."', student_state='".$student_state."', student_municipality='".$student_municipality."', student_neighborhood='".$student_neighborhood."', student_street='".$student_street."', student_postal_code='".$student_postal_code."', student_home_phone='".$student_home_phone."', student_phone_number='".$student_phone_number."', student_email='".$student_email."', student_school_of_origin='".$student_school_of_origin."', student_state_of_origin='".$student_state_of_origin."', student_final_grade='".$student_final_grade."', student_escom_order='".$student_escom_order."' WHERE student_id='".$student_id."'");


    
                     }
                    ?>
                         
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

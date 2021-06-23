<?php

// Desactivar toda notificación de error

error_reporting(0);

// Notificar solamente errores de ejecución

error_reporting(E_ERROR | E_WARNING | E_PARSE);

 // Notificar E_NOTICE también puede ser bueno (para informar de variables

// no inicializadas o capturar errores en nombres de variables ...)

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

 

// Notificar todos los errores excepto E_NOTICE

// Este es el valor predeterminado establecido en php.ini

error_reporting(E_ALL ^ E_NOTICE);

 

// Notificar todos los errores de PHP (ver el registro de cambios)

error_reporting(E_ALL);

 

// Notificar todos los errores de PHP

error_reporting(-1);

 

// Lo mismo que error_reporting(E_ALL);

ini_set('error_reporting', E_ALL);

?>


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
?>
<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8">
    <meta http-e quiv="content-type" content="text/html; charset=utf-8" />
    <title>ADMINISTRADOR</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style_crud.css">
    <!-- media queries -->
    <!-- <link rel="stylesheet" href="css/medium.css" media="(max-width: 630px)"> -->

    <link rel="shortcut icon" href="burrita.jpg">
</head>

<body>
    <!-- header with buttons -->
    <header>
        <div class="header">
            <span class="logo btnEs">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="260" height="108" viewBox="0 0 140 110"
                    style="position:absolute" class="svf">
                    <polygon id="poliEs" points="50,0 0,100 150,100 200,0 " fill="white" />
                </svg>
                <a href="https://www.escom.ipn.mx/" class="js-es">
                    <img src="resources/img/escom.png" alt="escom-logo" class="logoimg">
                </a>
            </span>
            <span class="logo btnStudent">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="260px" height="108" viewBox="0 0 140 110"
                    style="position:absolute">
                    <polygon id="poliStudent" class="js-lstudent" points="50,0 0,100 150,100 200,0 " fill="white" />
                </svg>
                <a href="index.html" class="js-student"><img src="resources/img/student.png" alt="alumno-logo"
                        id="logoimg1"></a>
            </span>
            <span class="logo btnAdmin">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="260" height="108" viewBox="0 0 140 110"
                    style="position:absolute">
                    <polygon id="poliAdmin" points="50,0 0,100 150,100 200,0 " fill="white" />
                </svg>
                <a href="#" class="js-admin"><img src="resources/img/admin.png" alt="admin-logo" class="logoimg"></a>
            </span>
        </div>
    </header>
    <main class="contenedor-body">



        <!--Registrar-->
        <div class="Registrar">
            <div class="menu-mostrar contenedor-boton">
                <a href="registrar.php" class="bt-menu">
                    <h3 class="centrar-texto fw-900">Registrar</h3>
                </a>

            </div>
        </div>
        <!-- Consultar -->
        <div class="Consultas">
            <div class="menu-mostrar contenedor-boton">
                <a href="#consulta" class="bt-menu">
                    <h3 class="centrar-texto fw-900">Consultar</h3>
                </a>

            </div>
            <div class="mostrar" id="consulta">
                <div class="form tabla-form">
                    <!-- identidad -->
                    <fieldset>
                        <legend>Consulta de alumno</legend>
                        <br>

                        <form method="POST" action="">
                            <label for="pass">Matricula:</label> <input type="text" name="boleta" size="35"
                                class="input-admin" placeholder="Ingresa la matricula">
                            <br>
                            <button class="btnMain Espacio" style="float:center;" type="submit">Consultar</button>
                            <br> <button class="btnMain Espacio" style="float:center;" type="submit"
                                formaction="consulta.php#consulta">Consultar Todos</button>
                        </form>
                    </fieldset>
                    <br>
                    <br>
                    <legend class="Tabla-Legend centrar-texto">Resultado</legend>
                    <br>
                    <br>

                    <table class="tabla">
                        <colgroup span="4" class="columns"></colgroup>
                        <tr>
                            <th class="titulos">Boleta</th>
                            <th class="titulos">Nombre</th>
                            <th class="titulos">Apellido Paterno</th>
                            <th class="titulos">Apellido Materno</th>
                            <th class="titulos">CURP</th>
                            <th class="titulos">Genero</th>
                            <th class="titulos">Fecha de nacimiento</th>
                            <th class="titulos">Estado</th>
                            <th class="titulos">Delegación</th>
                            <th class="titulos">Colonia</th>
                            <th class="titulos">Dirección</th>
                            <th class="titulos">CP</th>
                            <th class="titulos">Telefono</th>
                            <th class="titulos">Celular</th>
                            <th class="titulos">E-mail</th>
                            <th class="titulos">Escuela Procedencia</th>
                            <th class="titulos">Entidad procedencia</th>
                            <th class="titulos">Promedio</th>
                            <th class="titulos">Opción</th>

                        </tr>
                        <tr>
                            <?php $Boleta=$_POST['boleta'];
                                    $query = mysqli_query($conn,"SELECT * FROM students WHERE student_id = '".$Boleta."'");
                                    $datos=mysqli_fetch_array($query);
                        
                            ?>

                            <td>
                                <?php
                                    if($datos!=null){
                                        echo $datos['student_id'] ;
                                    }else{
                                        echo "";
                                    }
                                ?>
                            <td>
                                <?php 
                                    if($datos!=null){
                                        echo $datos['student_name'] ;
                                    }else{
                                        echo "";
                                    }
                                ?>
                            </td>
                                                        <td>
                                                            <?php 
                                if($datos!=null){
                                    echo $datos['student_first_surname'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_second_surname'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_curp'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_gender'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_date_of_birth'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_state'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_municipality'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_neighborhood'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_street'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_postal_code'] ;
                                }else{
                                    echo "";
                                }
                                
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_home_phone'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_phone_number'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_email'] ;
                                }else{
                                    echo "";
                                }
                                
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_school_of_origin'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_state_of_origin'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_final_grade'] ;
                                }else{
                                    echo "";
                                }
                                ?></td>
                                                        <td><?php 
                                if($datos!=null){
                                    echo $datos['student_escom_order'] ;
                                }else{
                                    echo "";
                                }
                            ?>
                                                        </td>

                        </tr>



                    </table>
                    <br><br><br>

                    <div id="consulta" class="menu-cerrar">
                        <a href="" class="bt  d-block ">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Eliminar-->

        <div class="Eliminar">
            <div class="menu-mostrar contenedor-boton">
                <a href="#eliminar" class="bt-menu">
                    <h3 class="centrar-texto fw-900">Eliminar</h3>
                </a>

            </div>
            <div class="mostrar" id="eliminar">
                <div class="form tabla-form">
                    <!-- identidad -->
                    <fieldset>
                        <legend>Remoción de alumno</legend>
                        <br>

                        <form method="POST" action="">
                            <label for="pass">Matricula:</label> <input type="text" name="boleta1" size="35"
                                class="input-admin" placeholder="Ingresa la matricula">
                            <br>
                            <button class="btnMain Espacio" style="float:center;" type="submit">Buscar</button>
                            <br> <button class="btnMain Espacio" style="float:center;" type="submit"
                                onclick="Saber()">Eliminar </button>

                            <script>
                            function Saber() {

                                <?php $aux=1?>

                            }
                            </script>

                        </form>
                    </fieldset>
                    <br>
                    <br>
                    <legend class="Tabla-Legend centrar-texto">Resultado</legend>
                    <br>
                    <br>
                    <table class="tabla">
                        <colgroup span="4" class="columns"></colgroup>
                        <tr>
                            <th class="titulos">Boleta</th>
                            <th class="titulos">Nombre</th>
                            <th class="titulos">Apellido Paterno</th>
                            <th class="titulos">Apellido Materno</th>
                            <th class="titulos">CURP</th>
                            <th class="titulos">Genero</th>
                            <th class="titulos">Fecha de nacimiento</th>
                            <th class="titulos">Estado</th>
                            <th class="titulos">Delegación</th>
                            <th class="titulos">Colonia</th>
                            <th class="titulos">Dirección</th>
                            <th class="titulos">CP</th>
                            <th class="titulos">Telefono</th>
                            <th class="titulos">Celular</th>
                            <th class="titulos">E-mail</th>
                            <th class="titulos">Escuela Procedencia</th>
                            <th class="titulos">Entidad procedencia</th>
                            <th class="titulos">Promedio</th>
                            <th class="titulos">Opción</th>

                        </tr>
                        <tr>
                        <tr>
                            <?php $Boleta1=$_POST['boleta1'];
    $query1 = mysqli_query($conn,"SELECT * FROM STUDENTS WHERE student_id = '".$Boleta1."'");
    $datos1=mysqli_fetch_array($query1);   
    if($aux=1){
     
        $query2 = mysqli_query($conn,"DELETE FROM timetable WHERE student_id = '".$Boleta1."'");
        $query0 = mysqli_query($conn,"DELETE FROM students WHERE student_id = '".$Boleta1."'");
  
    }
    ?>

                            <td>
                                <?php
        if($datos1!=null){
            echo $datos1['student_id'] ;
        }else{
            echo "";
        }
        ?>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_name'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_first_surname'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_second_surname'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_curp'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_gender'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_date_of_birth'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_state'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_municipality'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_neighborhood'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_street'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_postal_code'] ;
        }else{
            echo "";
        }
        
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_home_phone'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_phone_number'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_email'] ;
        }else{
            echo "";
        }
        
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_school_of_origin'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_state_of_origin'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_final_grade'] ;
        }else{
            echo "";
        }
        ?></td>
                            <td><?php 
        if($datos1!=null){
            echo $datos1['student_escom_order'] ;
        }else{
            echo "";
        }
    ?>
                            </td>


                    </table>
                    <br><br><br>

                    <div id="consulta" class="menu-cerrar">
                        <a href="" class="bt  d-block ">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Modificar-->
        <div class="Modificacion">
            <div class="menu-mostrar contenedor-boton">
                <a href="#modificar" class="bt-menu">
                    <h3 class="centrar-texto fw-900">Modificar</h3>
                </a>

            </div>
            <div class="mostrar" id="modificar">
                <div class="form tabla-form">
                    <!-- identidad -->
                    <fieldset>
                        <legend>Modificación de alumno</legend>
                        <br>

                        <form method="POST" action="">
                            <label for="pass">Matricula:</label> <input name="boleta2" size="35" class="input-admin"
                                placeholder="Ingresa la matricula">
                            <br>
                            <button class="btnMain Espacio" style="float:center;" type="submit">Buscar</button>
                            <br>
                        </form>
                    </fieldset>
                    <br>
                    <br>
                    <legend class="Tabla-Legend centrar-texto">Resultado</legend>
                    <br>
                    <br>
                    <table class="tabla">
                        <colgroup span="4" class="columns"></colgroup>
                        <tr>
                            <th class="titulos">Boleta</th>
                            <th class="titulos">Nombre</th>
                            <th class="titulos">Apellido Paterno</th>
                            <th class="titulos">Apellido Materno</th>
                            <th class="titulos">CURP</th>
                            <th class="titulos">Genero</th>
                            <th class="titulos">Fecha de nacimiento</th>
                            <th class="titulos">Estado</th>
                            <th class="titulos">Delegación</th>
                            <th class="titulos">Colonia</th>
                            <th class="titulos">Dirección</th>
                            <th class="titulos">CP</th>
                            <th class="titulos">Telefono</th>
                            <th class="titulos">Celular</th>
                            <th class="titulos">E-mail</th>
                            <th class="titulos">Escuela Procedencia</th>
                            <th class="titulos">Entidad procedencia</th>
                            <th class="titulos">Promedio</th>
                            <th class="titulos">Opción</th>

                        </tr>
                        <tr>
                        <tr>
                            <?php $Boleta2=$_POST['boleta2'];
    $query2 = mysqli_query($conn,"SELECT * FROM STUDENTS WHERE student_id = '".$Boleta2."'");
    $datos2=mysqli_fetch_array($query2);   
    

    ?>

                            <td>
                                <?php
    if($datos2!=null){
        echo $datos2['student_id'] ;
    }else{
        echo "";
    }
    ?>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_name'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_first_surname'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_second_surname'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_curp'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_gender'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_date_of_birth'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_state'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_municipality'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_neighborhood'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_street'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_postal_code'] ;
    }else{
        echo "";
    }
    
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_home_phone'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_phone_number'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_email'] ;
    }else{
        echo "";
    }
    
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_school_of_origin'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_state_of_origin'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_final_grade'] ;
    }else{
        echo "";
    }
    ?></td>
                            <td><?php 
    if($datos2!=null){
        echo $datos2['student_escom_order'] ;
    }else{
        echo "";
    }
    ?>
                            </td>



                    </table>


                    <br><br><br>

                    <div id="consulta" class="menu-cerrar">
                        <a href="modificar.php?Boleta2=<?php echo $Boleta2?>" class="bt d-block">Modificar</a>
                        <br>
                        <a href="" class="bt  d-block ">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>


    </main>

</body>

</html>
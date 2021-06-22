<?php
	define('CHARSET','UTF-8');
	header('Content-type: text/html; charset='.CHARSET);
	
	session_start();
    	include("./fpdf182/fpdf.php");
    	$consulta = $_GET["numero_de_boleta"];
	
   	 class PDF extends FPDF
	    {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('./resources/img/logo_IPN.png',10,8,30);
			$this->Image('./resources/img/logoESCOM.png',170,9,30);
			$this->SetFont('Arial','B',20);
			$this->Cell(0,10,'IPN - ESCOM',0,1,'C');
			$this->SetFont('Arial','B',15);
			$this->Cell(0,10,utf8_decode('Cita para el examen diagnóstico'),0,1,'C');

            $this->Ln(5);
			$this->Line(12,34,200,34);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1.5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','B',10);
            // Número de página
             $this->Cell(0,10,$this->PageNo(),0,0,'R');
        }
    	}

    
	
	// Creación del objeto de la clase heredada
    
	$conexion = mysqli_connect("localhost","root","","escom");
	
	$sql = "SELECT * FROM STUDENTS WHERE student_id = '".$consulta."'";
	$sql2 = "SELECT * FROM TIMETABLE WHERE student_id = '".$consulta."'";
	$resultado = mysqli_query($conexion, $sql);
	$resultado2 = mysqli_query($conexion, $sql2);
	
	if (!$resultado) {
    	echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    	exit;
	}	
	if (!$resultado2) {
   	 echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
   	 exit;}
	
	$fila = mysqli_fetch_row($resultado);
	$row = mysqli_fetch_row($resultado2);
	
	$_SESSION["boleta"] = $fila[0];
	$_SESSION["correo_alumno"] = $fila[14];
	$_SESSION["nombre_alumno"] = $fila[1];
	
	
	
	$pdf = new PDF();
    	$pdf->AliasNbPages();
    	$pdf->AddPage();
	$pdf->Ln(1);
	
	$pdf->SetFont('Courier','B',15);
	$pdf->SetFillColor(143, 196, 255);
    $pdf->Cell(0,10,'DATOS GENERALES',0,1,'C',True);
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,utf8_decode('Nombre(s): '."$fila[1]"),0,1);
    $pdf->Cell(0,10,utf8_decode('Apellido paterno: '."$fila[2]"),0,1);
	$pdf->Cell(0,10,utf8_decode('Apellidos materno: '."$fila[3]"),0,1);
	$pdf->Cell(0,10,utf8_decode('Número de Boleta: '."$fila[0]"),0,1);
    $pdf->Cell(0,10,utf8_decode('CURP : '."$fila[4]"),0,1);
	$pdf->Cell(0,10,utf8_decode('Género : '."$fila[6]"),0,1);	
	$pdf->Cell(0,10,utf8_decode('Fecha de nacimiento : '."$fila[5]"),0,1);	
	
	$pdf->SetFont('Courier','B',15);
	$pdf->Cell(0,10,'CONTACTO',0,1,'C',True);
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,utf8_decode('Estado: '."$fila[7]"),0,1);
    $pdf->Cell(0,10,utf8_decode('Delegación/Municipio: '."$fila[8]"),0,1);
	$pdf->Cell(0,10,utf8_decode('Colonia: '."$fila[9]"),0,1);
    $pdf->Cell(0,10,utf8_decode('Calle: '."$fila[10]"),0,1);
	$pdf->Cell(0,10,utf8_decode('Código Postal: '."$fila[11]"),0,1);	
	$pdf->Cell(0,10,utf8_decode('Telefono: '."$fila[12]"),0,1);	
	$pdf->Cell(0,10,utf8_decode('Celular: '."$fila[13]"),0,1);	
	$pdf->Cell(0,10,utf8_decode('Correo electrónico: '."$fila[14]"),0,1);
	
	$pdf->SetFont('Courier','B',15);
	$pdf->Cell(0,10,'PROCEDENCIA',0,1,'C',True);
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,utf8_decode('Escuela de procedencia: '."$fila[15]"),0,1);
    $pdf->Cell(0,10,utf8_decode('Entidad de procedencia: '."$fila[16]"),0,1);
	$pdf->Cell(0,10,utf8_decode('Promedio: '."$fila[17]"),0,1);
    $pdf->Cell(0,10,utf8_decode('Opción: '."$fila[18]"),0,1);
	
	$pdf->Ln(20);
	$pdf->SetFont('Courier','B',15);
	$pdf->Cell(0,10,'FICHA DE EXAMEN ',0,1,'C',True);
	$pdf->SetFont('Times','B',14);
	$pdf->Cell(0,10,utf8_decode('Grupo: 	'."$row[1]"),0,1);
	$pdf->Cell(0,10,utf8_decode('Fecha y Hora: '."$row[2]"),0,1);
	

    $pdf->Output();
	$_SESSION["doc"] = $pdf->Output('','S');

   	include("./sendpdf.php");
	
	//session_destroy();
?>

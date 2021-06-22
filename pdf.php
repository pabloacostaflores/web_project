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
			$this->Cell(0,10,'ESCOM',0,1,'C');
			$this->SetFont('Arial','B',15);
			$this->Cell(0,10,'DEPARTAMENTO DE ADMISION ',0,1,'C');

            $this->Ln(10);
			$this->Line(12,33,200,33);
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
	
	$pdf->SetFont('Courier','B',14);
    	$pdf->Cell(0,10,'Datos Generales',0,1,'C');
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,'Nombre(s): '."$fila[1]",0,1);
    	$pdf->Cell(0,10,'Apellido paterno: '."$fila[2]",0,1);
	$pdf->Cell(0,10,'Apellidos materno: '."$fila[3]",0,1);
	$pdf->Cell(0,10,'Numero de Boleta: '."$fila[0]",0,1);
    	$pdf->Cell(0,10,'CURP : '."$fila[4]",0,1);
	$pdf->Cell(0,10,'Genero : '."$fila[6]",0,1);	
	$pdf->Cell(0,10,'Fecha de nacimiento : '."$fila[5]",0,1);	
	
	$pdf->SetFont('Courier','B',14);
	$pdf->Cell(0,10,'Contacto',0,1,'C');
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,'Estado: '."$fila[7]",0,1);
    	$pdf->Cell(0,10,'Delegacion/Municipio: '."$fila[8]",0,1);
	$pdf->Cell(0,10,'Colonia: '."$fila[9]",0,1);
    	$pdf->Cell(0,10,'Calle: '."$fila[10]",0,1);
	$pdf->Cell(0,10,'Codigo Postal: '."$fila[11]",0,1);	
	$pdf->Cell(0,10,'Telefono: '."$fila[12]",0,1);	
	$pdf->Cell(0,10,'Celular: '."$fila[13]",0,1);	
	$pdf->Cell(0,10,'Correo electronico: '."$fila[14]",0,1);
	
	$pdf->SetFont('Courier','B',14);
	$pdf->Cell(0,10,'Procedencia',0,1,'C');
	$pdf->SetFont('Times','B',12);
	$pdf->Cell(0,10,'Escuela de procedencia: '."$fila[15]",0,1);
    	$pdf->Cell(0,10,'Entidad de procedencia: : '."$fila[16]",0,1);
	$pdf->Cell(0,10,'Promedio: '."$fila[17]",0,1);
    	$pdf->Cell(0,10,'Opcion: '."$fila[18]",0,1);
	
	 $pdf->Ln(20);
	$pdf->SetFont('Courier','B',14);
	$pdf->Cell(0,10,'Ficha de Examen ',0,1,'C');
	$pdf->SetFont('Times','B',14);
	$pdf->Cell(0,10,'Grupo: '."$row[1]",0,1);
	$pdf->Cell(0,10,'Fecha y Hora: '."$row[2]",0,1);
	

    $pdf->Output();
	$_SESSION["doc"] = $pdf->Output('','S');

   	include("./sendpdf.php");
	
	//session_destroy();
?>




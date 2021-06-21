<!-- <?php
  
    include("./fpdf182/fpdf.php");
   // $consulta = $_GET["numero_de_boleta"];

    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('./resources/img/logo_IPN.png',10,8,30);
			$this->Image('.resources/img/logoESCOM.png',170,9,30);
			$this->SetFont('Arial','B',20);
			$this->Cell(0,10,'ESCOM',0,1,'C');
			$this->Cell(0,10,'DEPARTAMENTO DE CB ',0,1,'C');

            $this->Ln(20);
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
    
	$conexion = mysqli_connect("localhost","root","","Proyecto");
	
	
	$sql = "SELECT  * FROM alumno WHERE nombre = '$consulta '";
	$resultado = mysqli_query($conexion, $sql);
	
	if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    exit;
}
	$fila = mysqli_fetch_row($resultado);

	
	$pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
	$pdf->Ln(6);
	
	$pdf->SetFont('Courier','B',14);
    $pdf->Cell(0,10,'Datos Generales',0,1,'C');
	$pdf->SetFont('Times','B',14);
	$pdf->Cell(0,10,'Nombre(s): '."$fila[0]",0,1);
    $pdf->Cell(0,10,'Apellidos: '."$fila[1] $fila[2]",0,1);
	$pdf->Cell(0,10,'Número de Boleta: '."$fila[3]",0,1);
    $pdf->Cell(0,10,'CURP : '."$fila[4]",0,1);
	$pdf->Cell(0,10,'Genero : '."$fila[5]",0,1);	
	$pdf->Cell(0,10,'Fecha de nacimiento : '."$fila[6]",0,1);	
	
	$pdf->SetFont('Courier','B',14);
	$pdf->Cell(0,10,'Contacto',0,1,'C');
	$pdf->SetFont('Times','B',14);
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
	$pdf->SetFont('Times','B',14);
	$pdf->Cell(0,10,'Escuela de preferencia: '."$fila[15]",0,1);
    $pdf->Cell(0,10,'Entidad de preferencia: : '."$fila[16]",0,1);
	$pdf->Cell(0,10,'Promedio: '."$fila[17]",0,1);
    $pdf->Cell(0,10,'Opción: '."$fila[18]",0,1);
	

	$pdf->SetFont('Courier','B',14);
	$pdf->Cell(0,10,'Ficha de Examen ',0,1,'C');
	$pdf->SetFont('Times','B',14);
	$pdf->Cell(0,10,'Grupo: '."$fila[19]",0,1);
    $pdf->Cell(0,10,'Fecha: : '."$fila[20]",0,1);
	$pdf->Cell(0,10,'Hora: '."$fila[21]",0,1);
    $pdf->Cell(0,10,'Salon: '."$fila[22]",0,1);

    $pdf->Output();
?>-->

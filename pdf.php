<?php
require('fpdf/fpdf.php');

/*Conexion con la base de datos de oracle*/ 
$conn = oci_connect("admisell", "admisell", "localhost/XE");
if (!$conn) {
   $m = oci_error();
   trigger_error(htmlentities($m['message']), E_USER_ERROR);
   }


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/codigo.png',12,25,50);
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(62);
    // Título
    $this->Cell(70,10,'Boleto de SellTicket',1,0,'C');
    // Salto de línea
    $this->Ln(40);

    $this->Cell(45,10, 'Fecha de Evento', 1, 0, 'C', 0);

    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$usuario=$_REQUEST['usuario'];
$stid = oci_parse($conn, "SELECT DISTINCT(fecha_h) FROM horario,horario_evento,evento,venta,login 
WHERE horario_evento.idhorario=horario.idhorario AND horario_evento.idevento=evento.idevento AND 
evento.idevento=venta.idevento AND login.idcliente=venta.idcliente AND nom_usua='".$usuario."'");
   oci_execute($stid);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);


While(($row = oci_fetch_array($stid, OCI_BOTH)) != false){
    $pdf->Cell(45,10, $row['FECHA_H'], 1, 0, 'C', 0);      
 }
 $pdf->Ln(10);
 $pdf->SetFont('Arial','B',11);
$stid2 = oci_parse($conn,"SELECT distinct(nombre_evt),descripcion FROM evento,venta,login 
WHERE evento.idevento=venta.idevento AND login.idcliente=venta.idcliente AND nom_usua='".$usuario."'");
oci_execute($stid2);
While(($rows = oci_fetch_array($stid2, OCI_BOTH)) != false){
    $pdf->Cell(45,10, 'EVENTO: '.$rows['NOMBRE_EVT'], 0, 1, 'C', 0);   
    $pdf->Cell(170,20, 'DESCRIPCION: '.$rows['DESCRIPCION'], 0, 1, 'C', 0); 
 }
 $pdf->Ln(10);
$stid3 = oci_parse($conn, "SELECT DISTINCT(nombre_c),ap_pa,ap_ma FROM 
cliente,evento,venta,login WHERE evento.idevento=venta.idevento and 
login.idcliente=venta.idcliente and nom_usua='".$usuario."' and login.idcliente=cliente.idcliente");
   oci_execute($stid3);
   

   $pdf->Cell(55,10, 'Nombre(s)', 1, 0, 'C', 0);
   $pdf->Cell(55,10, 'Apellido Paterno', 1, 0, 'C', 0);
   $pdf->Cell(55,10, 'Apellido Materno', 1, 1, 'C', 0);

   While(($rowss = oci_fetch_array($stid3, OCI_BOTH)) != false){
    $pdf->Cell(55,10, $rowss['NOMBRE_C'], 1, 0, 'C', 0);
    $pdf->Cell(55,10, $rowss['AP_PA'], 1, 0, 'C', 0);
    $pdf->Cell(55,10, $rowss['AP_MA'], 1, 1, 'C', 0);        
 }
 $pdf->Ln(10);
 $pdf->Cell(55,10, 'Asiento(s):', 0, 0, 'C', 0);
 $pdf->Ln(10);

 $stid4 = oci_parse($conn, "SELECT distinct(no_asiento),tipo,precio FROM 
 evento,venta,login,cliente_asiento,asiento WHERE evento.idevento=venta.idevento and
  login.idcliente=venta.idcliente and nom_usua='".$usuario."' and login.idcliente=cliente_asiento.idcliente
   and cliente_asiento.idasiento=asiento.idasiento");
   oci_execute($stid4);
   
   While(($rowsss = oci_fetch_array($stid4, OCI_BOTH)) != false){
    $pdf->Cell(55,10, $rowsss['NO_ASIENTO'], 1, 0, 'C', 0);
    $pdf->Cell(55,10, $rowsss['TIPO'], 1, 0, 'C', 0);
    $pdf->Cell(55,10, '$'.$rowsss['PRECIO'].'.00', 1, 1, 'C', 0);        
 }
 $pdf->Ln(25);
 $stid5 = oci_parse($conn, "SELECT distinct(pago_total) FROM venta,login WHERE
  login.idcliente=venta.idcliente and nom_usua='".$usuario."'");
   oci_execute($stid5);
   
   $pdf->Cell(55,10, 'Total:', 0, 0, 'C', 0); 
   While(($filas = oci_fetch_array($stid5, OCI_BOTH)) != false){
    $pdf->Cell(55,10, '$'.$filas['PAGO_TOTAL'].'.00 MXN', 0, 0, 'C', 0);      
 }

$pdf->Output();

?>
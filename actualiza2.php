<?php
/*Conexion con la base de datos de oracle*/ 
$conn = oci_connect("admisell", "admisell", "localhost/XE");
if (!$conn) {
$m = oci_error();
trigger_error(htmlentities($m['message']), E_USER_ERROR);
}
/*Alt edit multiple lines*/ 
$nom= $_POST['nombre'];
$pat= $_POST['apepa'];
$mat= $_POST['apema'];
$email= $_POST['correo'];
$pa= $_POST['pais'];
$ciu= $_POST['ciudad'];
$cp= $_POST['codi'];
$no_cuenta= $_POST['cuenta'];
$usuario= $_POST['usuario'];
$user= $_POST['usu'];
$passw= $_POST['contra'];

$nombre= strtoupper($nom);
$paterno=strtoupper($pat);
$materno= strtoupper($mat);
$pais= strtoupper($pa);
$ciudad= strtoupper($ciu);

$no = oci_parse($conn, "SELECT idcliente FROM login WHERE nom_usua= '".$usuario."'");
oci_execute($no);
While(($row1 = oci_fetch_array($no, OCI_BOTH)) != false){
   $ide = $row1['IDCLIENTE'];
}
$idc = (int) $ide;

$sql = oci_parse($conn, "UPDATE cliente SET nombre_c='$nombre',ap_pa='$paterno',ap_ma='$materno',email='$email',
cp='$cp',pais='$pais',ciudad='$ciudad',no_cuenta='$no_cuenta' WHERE idcliente = '".$idc."'");
oci_execute($sql);

$sql2 = oci_parse($conn, "UPDATE login SET nom_usua='$user',contra='$passw' WHERE login.nom_usua = '".$usuario."'");
oci_execute($sql2);

if(isset($usuario)){
    header("location:index.html");
}
else{
echo "error";
}
    ?>
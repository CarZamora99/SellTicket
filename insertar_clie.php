<?php
/*Alt edit multiple lines*/ 
$nom= $_POST['nombre'];
$pat= $_POST['apepa'];
$mat= $_POST['apema'];
$email= $_POST['correo'];
$pa= $_POST['pais'];
$ciu= $_POST['ciudad'];
$cp= $_POST['codi'];
$no_cu= $_POST['cuenta'];
$user= $_POST['usu'];
$passw= $_POST['contra'];

$nombre= strtoupper($nom);
$paterno=strtoupper($pat);
$materno= strtoupper($mat);
$pais= strtoupper($pa);
$ciudad= strtoupper($ciu);



/*Conexion con la base de datos de oracle*/ 
$conn = oci_connect("admisell", "admisell", "localhost/XE");
if (!$conn) {
   $m = oci_error();
   trigger_error(htmlentities($m['message']), E_USER_ERROR);
   }

   $stid = oci_parse($conn, 'SELECT idcliente FROM cliente ORDER BY idcliente DESC');
   oci_execute($stid);
   $lala = 0;
   While(($row = oci_fetch_array($stid, OCI_BOTH)) != false){
           $lala = $row['IDCLIENTE'];        
        }

        if($lala == 0)
   {
        $id=1;
        $insert = oci_parse($conn, "INSERT INTO cliente VALUES ('".$id."','".$nombre."','".$paterno."',
    '".$materno."','".$email."','".$cp."','".$pais."','".$ciudad."','".$no_cu."')");
    oci_execute($insert);

    $insert2 = oci_parse($conn, "INSERT INTO login VALUES ('".$id."','".$user."','".$passw."',
    '".$id."')");
    oci_execute($insert2); 

    header("location:index.html"); 

   }
   else
   {
    $cons = oci_parse($conn, 'SELECT idcliente FROM cliente ORDER BY idcliente DESC');
    oci_execute($cons); 

    While(($rows = oci_fetch_array($cons, OCI_BOTH)) != false){
        $idclientes = $rows['IDCLIENTE'];        
     } 

    $idcc = ( int ) $idclientes;
    $idc = $idcc + 1;
    $insert1 = oci_parse($conn, "INSERT INTO cliente VALUES ('".$idc."','".$nombre."','".$paterno."',
    '".$materno."','".$email."','".$cp."','".$pais."','".$ciudad."','".$no_cu."')");
    oci_execute($insert1);

    $insert22 = oci_parse($conn, "INSERT INTO login VALUES ('".$idc."','".$user."','".$passw."',
    '".$idc."')");
    oci_execute($insert22); 
    header("location:index.html"); 
   }
   oci_close($conn);
?>
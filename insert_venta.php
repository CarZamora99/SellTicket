<?php

$usu = $_REQUEST['usuario'];
$idev= $_REQUEST['idev'];
//Conexion con la base de datos de oracle 
$conn = oci_connect("admisell", "admisell", "localhost/XE");
if (!$conn) {
   $m = oci_error();
   trigger_error(htmlentities($m['message']), E_USER_ERROR);
   }

   $stid = oci_parse($conn, 'SELECT idventa FROM venta ORDER BY idventa DESC');
   oci_execute($stid);
   $lala = 0;
   While(($row = oci_fetch_array($stid, OCI_BOTH)) != false){
           $lala = $row['IDVENTA'];        
        }

        if($lala == 0)
        {
                $stid2 = oci_parse($conn, "SELECT idcliente FROM login WHERE nom_usua='".$usu."'");
                oci_execute($stid2);
                $id=1;
                While(($rows = oci_fetch_array($stid2, OCI_BOTH)) != false){
                        $idclien = $rows['IDCLIENTE'];        
                     } 
                $idc= ( int ) $idclien;
                $ideves = (int) $idev;
         $insert = oci_parse($conn, "INSERT INTO venta VALUES ('".$id."','".$idev."','".$idc."',NULL,SYSDATE)");
         header("location:asientos1.php?usuario=".urlencode($usu)); 
         oci_execute($insert); 
         oci_close($conn);
        }
       else{
        $stid2 = oci_parse($conn, "SELECT idcliente FROM login WHERE nom_usua='".$usu."'");
                oci_execute($stid2);
         $ideve = (int) $idev;      
                While(($rows = oci_fetch_array($stid2, OCI_BOTH)) != false){
                        $idclien = $rows['IDCLIENTE'];        
                     } 
                
                $idv= ( int ) $lala; 
                $idV = $idv + 1;
$insert1 = oci_parse($conn, "INSERT INTO venta VALUES ('".$idV."','".$idev."','".$idcliente."',NULL,SYSDATE)");
    oci_execute($insert1);
    header("location:asientos1.php?usuario=".urlencode($usu)); 
    oci_close($conn);
        }

   

        ?>
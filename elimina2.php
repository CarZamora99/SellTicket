<?php
    $idventa= $_REQUEST['venta'];
    /*Conexion con la base de datos de oracle*/ 
         $conn = oci_connect("admisell", "admisell", "localhost/XE");
         if (!$conn) {
            $m = oci_error();
            trigger_error(htmlentities($m['message']), E_USER_ERROR);
            }

     $stid2 = oci_parse($conn, "SELECT cliente.idcliente FROM venta,cliente 
 WHERE idventa='$idventa' and venta.idcliente=cliente.idcliente");
oci_execute($stid2);
    While(($row = oci_fetch_array($stid2, OCI_BOTH)) != false){
                          $cliente = $row['IDCLIENTE'];
                  }

$stid3 = oci_parse($conn, "DELETE FROM cliente_asiento WHERE idcliente='$cliente'");
oci_execute($stid3);

$stid = oci_parse($conn, "DELETE FROM venta WHERE idventa='".$idventa."'");
oci_execute($stid);
     
         header("location:index.html");
      oci_free_statement($stid);
      oci_free_statement($stid3);
          oci_close($conn);
     ?> 
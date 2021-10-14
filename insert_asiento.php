<?php
        
        $usuar = $_REQUEST['usuar'];
        $a1= $_REQUEST['1'];
       $asien = strtoupper($a1);
        
        /*Conexion con la base de datos de oracle*/ 
$conn = oci_connect("admisell", "admisell", "localhost/XE");
if (!$conn) {
   $m = oci_error();
   trigger_error(htmlentities($m['message']), E_USER_ERROR);
   }
   
  
  
   $sql1 = oci_parse($conn, "SELECT idcliente FROM login WHERE login.nom_usua = '".$usuar."'");
   oci_execute($sql1);
While(($row1 = oci_fetch_array($sql1, OCI_BOTH)) != false){
    $idcc = $row1['IDCLIENTE'];        
 }



    $as1 = oci_parse($conn, "SELECT idasiento FROM asiento WHERE no_asiento = '".$asien."'");
    oci_execute($as1);
   
   While(($rowa1 = oci_fetch_array($as1, OCI_BOTH)) != false){
     $ida1 = $rowa1['IDASIENTO'];        
   }

   $idass= ( int ) $ida1;
   $idc= ( int ) $idcc; 
  
   $insertar = oci_parse($conn, "INSERT INTO cliente_asiento VALUES ('".$idc."','".$idass."')");
   oci_execute($insertar);
   ?>
        <h1>Oprime aceptar para continuar</h1>
        <form action="pago.php" method="GET">
            <input type="hidden" name="usuario" value="<?php echo $_REQUEST['usuar'] ?>">
            <input type="hidden" name="1" value="<?php echo $_REQUEST['1']; ?>">
            <input type="submit" value="Aceptar">
        </form>
        <?php
   oci_free_statement($insertar);
    oci_close($conn);
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
<?php
 $conn = oci_connect("admisell", "admisell", "localhost/XE");
 if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
    }

    $usu= $_GET['usuario'];
    $asien= $_GET['1'];
    $asiento1 = strtoupper($asien);
    

    $p1 = oci_parse($conn, "SELECT precio FROM asiento WHERE no_asiento = '$asiento1'");
      oci_execute($p1);
      While(($row1 = oci_fetch_array($p1, OCI_BOTH)) != false){
         $pre1 = $row1['PRECIO'];
         }

         $idve =oci_parse($conn, "SELECT DISTINCT(idventa) FROM venta,login,cliente_asiento,asiento
   WHERE nom_usua='$usu' and venta.idcliente=login.idcliente and 
  cliente_asiento.idcliente=login.idcliente and cliente_asiento.idasiento=asiento.idasiento");
           oci_execute($idve);  
            While(($row11 = oci_fetch_array($idve, OCI_BOTH)) != false){
               $idv1 = $row11['IDVENTA'];
               }
               oci_close($conn);
              
            ?>
<h1>El pago se hizo correctamente oprime aceptar para continuar</h1>
      <form action="actualiza3.php" method="GET">
      <input type="hidden" name="precio" value="<?php echo $pre1; ?>">
      <input type="hidden" name="venta" value="<?php echo $idv1; ?>">
      <input type="submit" value="Aceptar">
      </form>      
</body>
</html>
    

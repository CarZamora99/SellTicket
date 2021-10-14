<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elimina</title>
    <link rel="stylesheet" href="estilotable.css">
</head>
<body>
<table id="tevento">
   <tr>
      <th>No</th>
      <th>Nombre de evento</th>
      <th>Descripcion</th>
      <th>Eliminar</th>
   <tr>
    <?php
    $usu= $_GET['usuario'];
    /*Conexion con la base de datos de oracle*/ 
         $conn = oci_connect("admisell", "admisell", "localhost/XE");
         if (!$conn) {
            $m = oci_error();
            trigger_error(htmlentities($m['message']), E_USER_ERROR);
            }
    
      $stid1 = oci_parse($conn, "SELECT DISTINCT(nombre_evt),descripcion,idventa 
      FROM evento,venta,cliente,login
      WHERE nom_usua = '".$usu."' AND login.idcliente=cliente.idcliente AND cliente.idcliente=venta.idcliente 
      AND evento.idevento=venta.idevento");
      oci_execute($stid1);

     While(($row = oci_fetch_array($stid1, OCI_BOTH)) != false){
      echo "<tr>";
         echo  "<td>",$row['IDVENTA'],"</td>";  
         echo  "<td>",$row['NOMBRE_EVT'],"</td>";
         echo  "<td>",$row['DESCRIPCION'],"</td>";
echo  "<td><a href='elimina2.php?venta=",$row['IDVENTA'],"'><button class='btnn' type='button'>Eliminar</button></a></td>";    
echo "</tr>";
          }
          oci_free_statement($stid1);
          oci_close($conn);
            ?>
          </table>
</body>
</html>
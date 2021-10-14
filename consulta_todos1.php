
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Conciertos</title>
   <link rel="stylesheet" href="estilotable.css">
</head>
<body>
<h1>Conciertos</h1>
<!--Consulta para visualizar todos los eventos que se encuentran
select idevento from evento ORDER BY idevento DESC;-->

<table id="tevento">
<?php
$usu= $_REQUEST['usuario'];
/*Conexion con la base de datos de oracle*/ 
     $conn = oci_connect("admisell", "admisell", "localhost/XE");
     if (!$conn) {
        $m = oci_error();
        trigger_error(htmlentities($m['message']), E_USER_ERROR);
        }

  $stid = oci_parse($conn, "SELECT * FROM  conciertos");
  oci_execute($stid);
  While(($row = oci_fetch_array($stid, OCI_BOTH)) != false){
  
   echo "<tr>";
      echo "<td rowspan='6'><img src='img/concierto.jpg' width='550px' height='350px'></td>";
      echo  "<th>",$row['IDEVENTO'],"</th>";
   echo "</tr>";
   echo "<tr>";
      echo  "<td>",$row['NOMBRE_EVT'],"</td>";
   echo "</tr>";
   echo "<tr>";
      echo  "<td>",$row['FECHA_H'],"</td>";
   echo "</tr>";
   echo "<tr>";
      echo   "<td>",$row['DIRECCION_EVT'],"</td>";
   echo "</tr>";
   echo "<tr>";
      echo  "<td>",$row['DESCRIPCION'],"</td>";
   echo "</tr>";
   echo "<tr>";
      echo  "<td align='center'><a href='insert_venta.php?idev=",$row['IDEVENTO'],"&usuario=",$usu,"'><button class='btnn' type='button'>Comprar</button></a></td>";
   echo "</tr>";
     }
  oci_free_statement($stid);

  $stid2 = oci_parse($conn, "SELECT * FROM  festivales");
  oci_execute($stid2);
  While(($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false){
  
   echo "<tr>";
      echo "<td rowspan='6'><img src='img/concierto.jpg' width='550px' height='350px'></td>";
      echo  "<th>",$row2['IDEVENTO'],"</th>";
   echo "</tr>";
   echo "<tr>";
      echo  "<td>",$row2['NOMBRE_EVT'],"</td>";
   echo "</tr>";
   echo "<tr>";
      echo  "<td>",$row2['FECHA_H'],"</td>";
   echo "</tr>";
   echo "<tr>";
      echo   "<td>",$row2['DIRECCION_EVT'],"</td>";
   echo "</tr>";
   echo "<tr>";
      echo  "<td>",$row2['DESCRIPCION'],"</td>";
   echo "</tr>";
   echo "<tr>";
      echo  "<td align='center'><a href='insert_venta.php?idev=",$row['IDEVENTO'],"&usuario=",$usu,"'><button class='btnn type='button'>Comprar</button></a></td>";
   echo "</tr>";
     }
  oci_free_statement($stid2);
  oci_close($conn);

    ?>
  </table>

</body>
</html>

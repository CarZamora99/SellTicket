<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Deporte</title>
   <link rel="stylesheet" href="estilotable.css">
</head>
<body>
<h1>Deporte</h1>
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

      $stid1 = oci_parse($conn, "SELECT evento.idevento,nombre_evt,fecha_h,direccion_evt,descripcion 
      FROM  horario,evento,horario_evento,clasificacion
      WHERE horario.idhorario=horario_evento.idhorario and evento.idevento=horario_evento.idevento and
      evento.idclasif=clasificacion.idclasif and tipo_c='LUCHA'");
        oci_execute($stid1);
        While(($row1 = oci_fetch_array($stid1, OCI_BOTH)) != false){
        
         echo "<tr>";
            echo "<td rowspan='6'><img src='img/deporte.jpg' width='550px' height='350px'></td>";
            echo  "<th>",$row1['IDEVENTO'],"</th>";
         echo "</tr>";
         echo "<tr>";
            echo  "<td>",$row1['NOMBRE_EVT'],"</td>";
         echo "</tr>";
         echo "<tr>";
            echo  "<td>",$row1['FECHA_H'],"</td>";
         echo "</tr>";
         echo "<tr>";
            echo   "<td>",$row1['DIRECCION_EVT'],"</td>";
         echo "</tr>";
         echo "<tr>";
            echo  "<td>",$row1['DESCRIPCION'],"</td>";
         echo "</tr>";
         echo "<tr>";
            echo  "<td align='center'><a href='insert_venta.php?idev=",$row1['IDEVENTO'],"&usuario=",$usu,"'><button class='btnn' type='button'>Comprar</button></a></td>";
         echo "</tr>";
           }
        oci_free_statement($stid1);

        $stid2 = oci_parse($conn, "SELECT evento.idevento,nombre_evt,fecha_h,direccion_evt,descripcion 
        FROM  horario,evento,horario_evento,clasificacion
         WHERE horario.idhorario=horario_evento.idhorario and evento.idevento=horario_evento.idevento and
         evento.idclasif=clasificacion.idclasif and tipo_c='BOX'");
        oci_execute($stid2);
        While(($row2 = oci_fetch_array($stid2, OCI_BOTH)) != false){
        
         echo "<tr>";
            echo "<td rowspan='6'><img src='img/deporte.jpg' width='550px' height='350px'></td>";
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
            echo  "<td align='center'><a href='insert_venta.php?idev=",$row2['IDEVENTO'],"&usuario=",$usu,"'><button type='button'>Comprar</button></a></td>";
         echo "</tr>";
           }
        oci_free_statement($stid2);

        $stid3 = oci_parse($conn, "SELECT * FROM futbol");
        oci_execute($stid3);
        While(($row3 = oci_fetch_array($stid3, OCI_BOTH)) != false){
        
         echo "<tr>";
            echo "<td rowspan='6'><img src='img/deporte.jpg' width='550px' height='350px'></td>";
            echo  "<th>",$row3['IDEVENTO'],"</th>";
         echo "</tr>";
         echo "<tr>";
            echo  "<td>",$row3['NOMBRE_EVT'],"</td>";
         echo "</tr>";
         echo "<tr>";
            echo  "<td>",$row3['FECHA_H'],"</td>";
         echo "</tr>";
         echo "<tr>";
            echo   "<td>",$row3['DIRECCION_EVT'],"</td>";
         echo "</tr>";
         echo "<tr>";
            echo  "<td>",$row3['DESCRIPCION'],"</td>";
         echo "</tr>";
         echo "<tr>";
            echo  "<td align='center'><a href='insert_venta.php?idev=",$row3['IDEVENTO'],"&usuario=",$usu,"'><button class='btnn' type='button'>Comprar</button></a></td>";
         echo "</tr>";
           }
        oci_free_statement($stid3);
  oci_close($conn);

    ?>
  </table>

</body>
</html>
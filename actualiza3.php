<?php
$conn = oci_connect("admisell", "admisell", "localhost/XE");
if (!$conn) {
    $m = oci_error();
    trigger_error(htmlentities($m['message']), E_USER_ERROR);
    }

    $pre1= $_GET['precio'];
    $idv= $_GET['venta'];

    $precio = (int) $pre1;

$actua = oci_parse($conn, "UPDATE venta SET pago_total = $precio WHERE idventa ='$idv'");
oci_execute($actua);

oci_close($conn);

               header("location:index.html");
               ?>
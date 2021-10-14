<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/ico.png">
    <title>Editar</title> 
</head>
<style>
  * {
  box-sizing: border-box;
}

input[type=text], select, input[type=password], input[type=number], input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</style>
<body>
  <h1>Editar perfil</h1>
    <?php
    $usuario = $_REQUEST['usuario'];
    
/*Conexion con la base de datos de oracle*/ 
$conn = oci_connect("admisell", "admisell", "localhost/XE");
if (!$conn) {
$m = oci_error();
trigger_error(htmlentities($m['message']), E_USER_ERROR);
}

$sql1 = oci_parse($conn, "SELECT * FROM cliente,login WHERE cliente.idcliente=login.idcliente 
and login.nom_usua = '".$usuario."'");
oci_execute($sql1);
While(($row1 = oci_fetch_array($sql1, OCI_BOTH)) != false){
    ?>
    <form method="POST" action="actualiza2.php">
  <div class="row">
    <div class="col-25">
      <label for="fname1">Nombre:</label>
    </div>
    <div class="col-75">
      <input type="text" id="nomb" name="nombre" placeholder="<?php echo $row1['NOMBRE_C'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="pname">Apellido Paterno:</label>
    </div>
    <div class="col-75">
      <input type="text" id="pname" name="apepa" placeholder="<?php echo $row1['AP_PA'];?>">
    </div>
    <div class="row">
    <div class="col-25">
      <label for="mname">Apellido Materno:</label>
    </div>    
    <div class="col-75">
      <input type="text" id="names" name="apema" placeholder="<?php echo $row1['AP_MA'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Correo:</label>
    </div>    
    <div class="col-75">
      <input type="email" id="email" name="correo" placeholder="<?php echo $row1['EMAIL'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="paiss">Pais</label>
    </div>
    <div class="col-75">
    <input type="text" id="pais" name="pais" placeholder="<?php echo $row1['PAIS'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="ci">Ciudad:</label>
    </div>    
    <div class="col-75">
      <input type="text" id="ciudad" name="ciudad" placeholder="<?php echo $row1['CIUDAD'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="cod">Codigo Postal:</label>
    </div>    
    <div class="col-75">
      <input type="number" id="cp" name="codi" placeholder="<?php echo $row1['CP'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="no">No cuenta:</label>
    </div>    
    <div class="col-75">
      <input type="text" id="cp" name="cuenta" placeholder="<?php echo $row1['NO_CUENTA'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="us">Usuario:</label>
    </div>    
    <div class="col-75">
      <input type="text" id="user" name="usu" placeholder="<?php echo $row1['NOM_USUA'];?>">
    </div>
  </div> 
  <div class="row">
    <div class="col-25">
      <label for="con">Contrasena:</label>
    </div>    
    <div class="col-75">
      <input type="password" id="pass" name="contra">
    </div>
  </div>
  <input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
  <button class="bu" type="submit">Registar</button>
    </form>
    <?php 
}
?>
</body>
</html>
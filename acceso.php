<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="icon" href="img/ico.png">
    <style type="text/css">
/*
	Color fondo: #632432;
	Color header: 246355;
	Color borde: 0F362D;
	Color iluminado: 369681;
*/
body{
	background-color: #0174DF;
	font-family: Arial;
}

#main-container{
	margin: 150px auto;
	width: 600px;
}

table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 20%;
}

th, td{
	padding: 20px;
}

thead{
	background-color: #246355;
	border-bottom: solid 5px #0F362D;
	color: white;
}

tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #369681;
	color: white;
}
}
</style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
<div align='center'>
<table border='1' width="100%" border="0" cellspacing="0" cellpadding="0">
    <th>MENU</th>
    <tr>
    <td><a href="elimina.php?usuario=<?php echo $_REQUEST['usuario'];?>">Eliminar evento</a><br></td>
    <tr>
    <td><a href="actualiza.php?usuario=<?php echo $_REQUEST['usuario'];?>">Editar perfil</a><br></td>
    <tr>
    <td><a href="pdf.php?usuario=<?php echo $_REQUEST['usuario'];?>">Generar comprobante</a><br></td>
    <tr>
    </table>
</div>
</body>
</html>
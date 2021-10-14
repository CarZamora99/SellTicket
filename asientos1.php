<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="asientos.js"></script>
    <title>Asientos</title>
</head>
<body>
    <!--Crear botones para los asientos de 12 x 15-->
    <!--Rojo si esta ocupado-->
    <h1>Asientos</h1>
    
    <form method="GET" action="asientos.php">
        Seleccione la cantidad de asientos:
        </br>
        <select name="asiento">    
            <option value="1" selected>1</option>        
        </select>
        <br>
        <input type="hidden" name="user" value="<?php echo $_REQUEST['usuario'];?>">
        <br>
        <button type="submit">Aceptar</button>

    </form>
<p>Amarillo: GOLD</p>
<p>Naranja: Plata</p>
<p>Azul: General</p>
<table border='1' align='center'>
        <tr>
            <td><button style="background:yellow">A1</button></td>
            <td><button style="background:yellow">A2</button></td>
            <td><button style="background:yellow">A3</button></td>
            <td><button style="background:yellow">A4</button></td>
            <td><button style="background:yellow">A5</button></td>
            <td><button style="background:yellow">A6</button></td>
            <td><button style="background:yellow">A7</button></td>
            <td><button style="background:yellow">A8</button></td>
            <td><button style="background:yellow">A9</button></td>
            <td><button style="background:yellow">A10</button></td>
        </tr>
        <tr>
            <td><button style="background:yellow">B1</button></td>
            <td><button style="background:yellow">B2</button></td>
            <td><button style="background:yellow">B3</button></td>
            <td><button style="background:yellow">B4</button></td>
            <td><button style="background:yellow">B5</button></td>
            <td><button style="background:yellow">B6</button></td>
            <td><button style="background:yellow">B7</button></td>
            <td><button style="background:yellow">B8</button></td>
            <td><button style="background:yellow">B9</button></td>
            <td><button style="background:yellow">B10</button></td>
        </tr>
        <tr>
            <td><button style="background:orange">C1</button></td>
            <td><button style="background:orange">C2</button></td>
            <td><button style="background:orange">C3</button></td>
            <td><button style="background:orange">C4</button></td>
            <td><button style="background:orange">C5</button></td>
            <td><button style="background:orange">C6</button></td>
            <td><button style="background:orange">C7</button></td>
            <td><button style="background:orange">C8</button></td>
            <td><button style="background:orange">C9</button></td>
            <td><button style="background:orange">C10</button></td>
        </tr>
        <tr>
            <td><button style="background:orange">D1</button></td>
            <td><button style="background:orange">D2</button></td>
            <td><button style="background:orange">D3</button></td>
            <td><button style="background:orange">D4</button></td>
            <td><button style="background:orange">D5</button></td>
            <td><button style="background:orange">D6</button></td>
            <td><button style="background:orange">D7</button></td>
            <td><button style="background:orange">D8</button></td>
            <td><button style="background:orange">D9</button></td>
            <td><button style="background:orange">D10</button></td>
        </tr>
        <tr>
            <td><button style="background:orange">E1</button></td>
            <td><button style="background:orange">E2</button></td>
            <td><button style="background:orange">E3</button></td>
            <td><button style="background:orange">E4</button></td>
            <td><button style="background:orange">E5</button></td>
            <td><button style="background:orange">E6</button></td>
            <td><button style="background:orange">E7</button></td>
            <td><button style="background:orange">E8</button></td>
            <td><button style="background:orange">E9</button></td>
            <td><button style="background:orange">E10</button></td>
        </tr>
        <tr>
            <td><button style="background:blue">F1</button></td>
            <td><button style="background:blue">F2</button></td>
            <td><button style="background:blue">F3</button></td>
            <td><button style="background:blue">F4</button></td>
            <td><button style="background:blue">F5</button></td>
            <td><button style="background:blue">F6</button></td>
            <td><button style="background:blue">F7</button></td>
            <td><button style="background:blue">F8</button></td>
            <td><button style="background:blue">F9</button></td>
            <td><button style="background:blue">F10</button></td>
        </tr>
        <tr>
            <td><button style="background:blue">G1</button></td>
            <td><button style="background:blue">G2</button></td>
            <td><button style="background:blue">G3</button></td>
            <td><button style="background:blue">G4</button></td>
            <td><button style="background:blue">G5</button></td>
            <td><button style="background:blue">G6</button></td>
            <td><button style="background:blue">G7</button></td>
            <td><button style="background:blue">G8</button></td>
            <td><button style="background:blue">G9</button></td>
            <td><button style="background:blue">G10</button></td>
        </tr>
        <tr>
            <td><button style="background:blue">H1</button></td>
            <td><button style="background:blue">H2</button></td>
            <td><button style="background:blue">H3</button></td>
            <td><button style="background:blue">H4</button></td>
            <td><button style="background:blue">H5</button></td>
            <td><button style="background:blue">H6</button></td>
            <td><button style="background:blue">H7</button></td>
            <td><button style="background:blue">H8</button></td>
            <td><button style="background:blue">H9</button></td>
            <td><button style="background:blue">H10</button></td>
        </tr>
        <tr>
            <td><button style="background:blue">I1</button></td>
            <td><button style="background:blue">I2</button></td>
            <td><button style="background:blue">I3</button></td>
            <td><button style="background:blue">I4</button></td>
            <td><button style="background:blue">I5</button></td>
            <td><button style="background:blue">I6</button></td>
            <td><button style="background:blue">I7</button></td>
            <td><button style="background:blue">I8</button></td>
            <td><button style="background:blue">I9</button></td>
            <td><button style="background:blue">I10</button></td>
        </tr>
        <tr>
            <td><button style="background:blue">J1</button></td>
            <td><button style="background:blue">J2</button></td>
            <td><button style="background:blue">J3</button></td>
            <td><button style="background:blue">J4</button></td>
            <td><button style="background:blue">J5</button></td>
            <td><button style="background:blue">J6</button></td>
            <td><button style="background:blue">J7</button></td>
            <td><button style="background:blue">J8</button></td>
            <td><button style="background:blue">J9</button></td>
            <td><button style="background:blue">J10</button></td>
        </tr>
    </table>
</body>
</html>
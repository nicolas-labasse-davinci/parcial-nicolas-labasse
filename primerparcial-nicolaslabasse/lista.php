<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Hola, esta es la tabla de numeros que pediste</h1>

<?php

$minimo = $_POST['minimo'];
$maximo = $_POST['maximo'];


$columnas = 4;
echo("<table>");
        


for($x = $minimo; $x < $maximo; $x++) {
    echo("<tr>");
    for ($y = 0; $y <= 10 ; $y++) {
        echo "<td>",(( $x + 1)*( $y + 1 )),"</td>";
    }
    echo("</tr>");
}

echo("</table>");


?>

<a href="index.php">Volver a la página de inicio</a>


</body>
</html>
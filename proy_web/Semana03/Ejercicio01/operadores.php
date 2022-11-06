<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERADORES MATEMATICOS</h1>
    <?php
    // + - * / ^
    $cantidad = 12;
    $preciounitario = 0.5;
    $resultado = $cantidad+$preciounitario;
    $resultado = $cantidad-$preciounitario;
    $resultado = $cantidad*$preciounitario;
    $resultado = $cantidad/$preciounitario;
    $resultado = $cantidad^$preciounitario;
    echo ($resultado);
    echo "<br>";
    echo "<br>";
    echo "AREA DEL TRIANGULO";
    echo "<br>";
    $base = 12;
    $altura = 4;
    $AreaTriangulo = ($base*$altura)/2;
    echo ("El area del triangulo es:");
    echo ($AreaTriangulo);
    echo "<br><br>";
    echo "AREA DEL CIRCULO";
    echo "<br>";
    const pi=3.1416;
    $radio = 5;
    $AreaCirculo = ($radio*$radio)*pi;
    echo ("El area del circulo es:");
    echo ($AreaCirculo);





    ?>

    
</body>
</html>
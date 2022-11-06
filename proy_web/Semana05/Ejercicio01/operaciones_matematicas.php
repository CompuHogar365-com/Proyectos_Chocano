<?php
    $numero1 = $_POST["v_num1"];

    $numero2 = $_POST["v_num2"];

    $genero = $_POST["rb_genero"];

    $suma = $numero1+$numero2;

    echo "La suma es: $suma ";
    echo "El genero es: $genero";
    echo "<br>";

    echo "<a href=index.php>Volver</a>"


?>
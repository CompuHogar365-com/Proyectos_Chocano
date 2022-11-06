<?php

    $sueldo = $_POST["v_sueldo"];

    $tipo_seguro= $_POST["tipo_seguro"]; // ONP o AFP

    $descuento=0;
    $sueldo_neto=0;

    if($tipo_seguro=="AFP")
    {
        $descuento= $sueldo*0.13;

        $sueldo_neto = $sueldo - $descuento;
    }
    else
    {
        $descuento= $sueldo*0.10;
        
        $sueldo_neto = $sueldo - $descuento;
    }

    echo "El descuento es: $descuento <br>";
    echo "El sueldo neto es: $sueldo_neto <br>";

    echo "<a href=index.php>Volver</a>"
?>
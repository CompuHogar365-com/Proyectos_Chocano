<?php
    $monto_ingresado = $_POST["v_monto"];
    $monto_centro_salud=0;
    $monto_comedor=0;
    $monto_bolsa_valores=0;

    if($monto_ingresado >= 16400)
    {
        $monto_centro_salud= $monto_ingresado*0.3317;
        $monto_comedor= $monto_ingresado*0.4908;
        //$monto_bolsa_valores=$monto_ingresado*0.1775;
        $monto_bolsa_valores=$monto_ingresado-($monto_centro_salud+$monto_comedor);
    }
    else
    {
        $monto_centro_salud= $monto_ingresado*0.2111;
        $monto_comedor= $monto_ingresado*0.5214;
        $monto_bolsa_valores=$monto_ingresado-($monto_centro_salud+$monto_comedor);
    } 

    echo
    "
    La asignacion de montos es:<br>
    Centro de Salud: $monto_centro_salud <br>
    Comedor: $monto_comedor <br>
    Bolsa de Valores: $monto_bolsa_valores<br>
    ";

    echo
    "
    <a href=index.php>Regresar</a>
    "
?>
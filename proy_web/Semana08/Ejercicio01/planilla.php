<?php

    $tipo_documento= $_POST["v_tipo_documento"];
    $numero_documento= $_POST["v_numero_documento"];
    $apellido = $_POST["v_apellido"];
    $nombre = $_POST["v_nombre"];
    $horas_trabajadas = $_POST["v_horas_trabajadas"];
    $numero_hijos = $_POST["v_numero_hijos"];
    $contribucion = $_POST["v_contribucion"];
    $seguro_vida = $_POST["v_seguro_vida"];

    $sueldo_neto;
    $bonificacion_x_numero_hijos;
    $monto_contribucion;
    $monto_seguro_vida;

    $sueldo_total;

    /* CALCULA EL SUELDO NETA */
    if($horas_trabajadas<=8)
    {
        $sueldo_neto= $horas_trabajadas*12;
    }
    else
    {
        $sueldo_neto= (8*12)+(($horas_trabajadas-8)*17);
    }

    /* CALCULA EL BONIFICACION POR HIJOS */
    if ($numero_hijos == 0)
    {
        $bonificacion_x_numero_hijos= 0;
    }
    else if($numero_hijos>0 && $numero_hijos<=2)
    {
        $bonificacion_x_numero_hijos = $sueldo_neto * 0.02;
    }
    else if($numero_hijos>2 && $numero_hijos<=4)
    {
        $bonificacion_x_numero_hijos = $sueldo_neto * 0.05;
    }
    else if($numero_hijos>4)
    {
        $bonificacion_x_numero_hijos = $sueldo_neto * 0.075;
    }

    /* CALCULA EL PAGO DE JUBILACION */
    if ($contribucion == "ONP")
    {
        $monto_contribucion = $sueldo_neto * 0.13;
    }
    else if($contribucion == "AFP")
    {
        $monto_contribucion = $sueldo_neto * 0.1106;
    }

    /* CALCULA EL PAGO DE SEGURO DE VIDA */
    if ($seguro_vida=="1")
    {
        $monto_seguro_vida = ($sueldo_neto+$bonificacion_x_numero_hijos-$monto_contribucion)*0.0408;
    }
    else
    {
        $monto_seguro_vida = 0;
    }

    $sueldo_total= $sueldo_neto+$bonificacion_x_numero_hijos-$monto_contribucion-$monto_seguro_vida;

    echo
    ("
        <h1>RESUMEN DE PLANILLA</h1>
        TIPO DOCUMENTO: $tipo_documento <br>
        N° DOCUMENTO: $numero_documento <br>
        APELLIDOS: $apellido <br>
        NOMBRES: $nombre <br>
        N° HORAS TRABAJADAS: $horas_trabajadas <br>
        BONIFICACION X HIJOS: $bonificacion_x_numero_hijos <br>
        MONTO CONTRIBUCION: $monto_contribucion <br>
        MONTO SEGURO DE VIDA: $monto_seguro_vida <br>
        SUELDO TOTAL: $sueldo_total <br>
    ");


    

?>
<?php
$montoInversor1= $_POST["v_inversor1"];
$montoInversor2= $_POST["v_inversor2"];
$montoInversor3= $_POST["v_inversor3"];

$TotalMontoInversion = $montoInversor1 + $montoInversor2 + $montoInversor3;

// Porcentajes de Inversion:
$iNVERSION01 = $montoInversor1*100/$TotalMontoInversion;
$iNVERSION02 = $montoInversor2*100/$TotalMontoInversion;
$iNVERSION03 = $montoInversor3*100/$TotalMontoInversion;

//Mostrar 
echo 
("
    <h2>RESUMEN DE INVERSION</h2> <hr>
    <b>Inversion Total</b>: $TotalMontoInversion <br>
    <em><b>Socio 1:</b></em>  $iNVERSION01 % <br>
    <em><b>Socio 2:</b></em>  $iNVERSION02 % <br>
    <em><b>Socio 3:</b></em>  $iNVERSION03 % <br>

");

?>
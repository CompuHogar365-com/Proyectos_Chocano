<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays en PHP</h1>
    <?php
        //
        //
        //1 ARREGLO--MAS DE UN DATO
        //VARIABLE SIMPLE -- UN DATO.

        $nombre = array("Edison","Nombre");

        echo $nombre[1];
        echo "<br>";

        // ARRAY DE TIPO INCREMENTAL
        $alumno = ["Edison","Nombre","Esmeralda"];
        $alumno[2] = "Miguel";

        echo $alumno[2];
        echo "<br>";

        //ARRAY DE TIPO ASOCIATIVO
        $profesor = ["nombre"=>"Edison","Apellido"=>"Donayre"];

        echo $profesor["nombre"];
        echo "<br>";
        $profesor["Apellido"]="Najarro";

        echo $profesor["Apellido"];
        echo "<br>";

        //ARRAY MULTIDIMENSIONALES
        $profesor2 = ["nombre"=>"Edison","Apellido"=>"Donayre","curso"=>["Progrmacion Web","Aplicacion Moviles","Bases de Datos"]];
        
        $profesor2["curso"][0]="Algoritmos";
        echo $profesor2["curso"][0];
        echo "<br>";

        // UNA ARRAY SOLO PUEDE TENER UN TIPO DE DATO?
        $alumno2 = ["Edison",29,"987272736"]

    ?>

</body>
</html>
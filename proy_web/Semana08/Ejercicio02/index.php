<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioCasa</title>
</head>
<body>
    <h1>TituloPLANILLA2</h1>
    <form action="operacionmostrar.php" method="post">
        <label for="PETICION01">PETICION1</label>
        <select name="v_tiposeleccion" id="tiposeleccion">
            <option value="0">Seleccione01</option>
            <option value="1">Seleccione02</option>
            <option value="2">Seleccione03</option>
        </select>
        <br><br>
        <label for="nombre">mi nombre</label>
        <input type="text" name="v_nombre" id="nombre">
        <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
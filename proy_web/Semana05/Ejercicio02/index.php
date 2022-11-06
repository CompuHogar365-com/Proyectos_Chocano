<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo</title>
</head>
<body>
    <h1>CALCULO DE SUELDO</h1>

    <form action="sueldo.php" method="post">
        <label for="sueldo">Ingrese Sueldo:</label>
        <input type="text" for="sueldo" name="v_sueldo">
        <br><br>

        <label for="">Tipo de Seguro</label>

        <input type="radio" name="tipo_seguro" id="rb_afp" value="AFP">
        <label for="rb_afp">AFP</label>

        <input type="radio" name="tipo_seguro" id="rb_onp" value="ONP">
        <label for="rb_onp">ONP</label>
        <br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
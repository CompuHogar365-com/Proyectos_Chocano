<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>FORMULARIO CON PHP</h1>
    <form action="operaciones_matematicas.php" method="post">
        
        <label for="num1">Ingrese N°01</label>
        <input type="text" for="num1" name="v_num1" required><br><br>

        <label for="num2">Ingrese N°02</label>
        <input type="text" for="num2" name="v_num2" required><br><br>

        <label for="">Genero</label>

        <input type="radio" name="rb_genero" id="rb_m" value="M">
        <label for="rb_m">Masculino</label>

        <input type="radio" name="rb_genero" id="rb_f" value="F">
        <label for="rb_f">Femenino</label>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    
</body>
</html>
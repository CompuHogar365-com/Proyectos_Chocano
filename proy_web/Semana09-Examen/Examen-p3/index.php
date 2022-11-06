<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SueldoSemanal</title>
</head>
<body>
    <h1>Sueldo Semanal por Area:</h1>
    <form action="OperacionSueldo.php" method="post">
    <label for="Nombre"><b> Nombre:</b></label>
    <input type="text" name="v_Nombre" id="NombreEmpleado">
    <label for="area_depa">Departamento</label>
       <select name="v_area_depa" id="area_departamento">
        <option value="60.00">Contabilidad</option>
        <option value="62.50">Informática</option>
        <option value="48.20">Logística</option>
        <option value="25.50">Producción</option>
       </select>
    </form>
</body>
</html>
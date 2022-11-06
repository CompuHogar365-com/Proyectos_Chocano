<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilla</title>
</head>
<body>
    <h1>PAGO DE PLANILLAS</h1>
    <form action="planilla.php" method="post">
       <label for="tipo_documento">Tipo Documento</label>
       <select name="v_tipo_documento" id="tipo_documento">
        <option value="DNI">DNI</option>
        <option value="CE">CE</option>
        <option value="PASS">PASS</option>
        <option value="S_DOC">S/DOC</option>
       </select>
       <br><br>
       <label for="numero_documento">N° Documento</label>
       <input type="text" name="v_numero_documento" id="numero_documento">
       <br><br>
       <label for="apellidos">Apellidos</label>
       <input type="text" name="v_apellido" id="apellidos">
       <br><br>
       <label for="nombres">Nombres</label>
       <input type="text" name="v_nombre" id="nombres">
       <br><br>
        <label for="horas_trabajadas">Ingrese N° Horas Trabajadas</label>
       <input type="text" name="v_horas_trabajadas" id="horas_trabajadas">
       <br><br>
       <label for="numero_hijos">N° Hijos</label>
       <input type="number" name="v_numero_hijos" id="numero_hijos">
       <br><br>
       <label for="">Contribucion</label>
       <input type="radio" name="v_contribucion" id="r_onp" value="ONP">
       <label for="">ONP</label>
       <input type="radio" name="v_contribucion" id="r_afp" value="AFP">
       <label for="">AFP</label>
       <br><br>
       <label for="seguro_vida">Seguro de Vida</label>
       <input type="hidden" name="v_seguro_vida" value="0">
       <input type="checkbox" name="v_seguro_vida" id="seguro_vida" value="1">
       <label for="">Si</label>
       <br><br>
       <input type="submit" value="Calcular">
    </form>

</body>
</html>
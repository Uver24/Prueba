<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Prueba/CSS/style.css">
    <title>Document</title>
</head>

<body>
    <h2>INICIO</h2>
    <form method="post" action="" id="form">
    <label for="departamento">Seleccione un Departamento:</label>
    <select name="departamento" id="departamento" >
        <?php
        $sel = $con->query("SELECT * FROM departamento");
        while ($fila = $sel-> fetch_assoc()) {
            echo "<option value='{$fila['id']}'>{$fila['nombre']} </option>";
        }
        ?>
    </select>
    <select id="municipios"></select>
</form>
    <table>
        <th>id</th>
        <th>Tipo de documento</th>
        <th>Numero de documento</th>
        <th>Nombre 1</th>
        <th>Nombre 2</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Genero</th>
        <th>Departamento </th>
        <th>Municipio</th>
        <th></th>
        <th></th>
        <?php
        $sel = $con->query("SELECT*FROM paciente");
        while ($fila = $sel->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['tipo_documento_id'] ?></td>
                <td><?php echo $fila['numero_documento'] ?></td>
                <td><?php echo $fila['nombre1'] ?></td>
                <td><?php echo $fila['nombre2'] ?></td>
                <td><?php echo $fila['apellido1'] ?></td>
                <td><?php echo $fila['apellido2'] ?></td>
                <td><?php echo $fila['genero_id'] ?></td>
                <td><?php echo $fila['departamento_id'] ?></td>
                <td><?php echo $fila['municipio_id'] ?></td>

                <th><a href="actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR</a></th>
                <th><a href="eliminar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></th>
            </tr>
        <?php } ?>
    </table>
    <script src="inicio.js"></script>
</body>

</html>
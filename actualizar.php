<?php include 'conexion.php';

$id = $_REQUEST['id'];

$sel = $con -> query("SELECT*FROM paciente WHERE id=$id");
if($fila = $sel ->fetch_assoc()){
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actulizart</title>
</head>

<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name="tipo_documento_id" placeholder="Tipo de documento" value="<?php echo $fila['tipo_documento_id']?>"><br>
        <input type="text" name="numero_documento" placeholder="numero de documento"value="<?php echo $fila['numero_documento']?>" ><br>
        <input type="text" name="nombre1" placeholder="Nomnre 1" value="<?php echo $fila['nombre1']?>"><br>
        <input type="text" name="nombre2" placeholder="Nombre 2" value="<?php echo $fila['nombre2']?>"><br>
        <input type="text" name="apellido1" placeholder="Apellido 1" value="<?php echo $fila['apellido1']?>"><br>
        <input type="text" name="apellido2" placeholder="Apellido 2" value="<?php echo $fila['apellido2']?>"><br>
        <input type="text" name="genero_id" placeholder="Genero" value="<?php echo $fila['genero_id']?>"><br>
        <input type="text" name="departamento_id" placeholder="Departamento" value="<?php echo $fila['departamento_id']?>"><br>
        <input type="text" name="municipio_id" placeholder="Municipio" value="<?php echo $fila['municipio_id']?>"><br>
         <button name="actulizar">Actulizar</button>
    </form>
</body>

</html>
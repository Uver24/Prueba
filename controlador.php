<?php
include('conexion.php');

if ($_POST["departamento"]) {
    $id = $_POST["departamento"];
    $sql = $con->query("SELECT * FROM municipios WHERE departamento_id = '$id'");
    while ($fila = $sql-> fetch_assoc()) {

        echo ("<option value='{$fila['id']}'>{$fila['nombre']} </option>");
    }
    
}else {

    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo 'Los Campos esta vacios';
    } else {
        $use = $_POST["usuario"];
        $contrasena = $_POST["password"];
    
        $sql = $con->query("SELECT * FROM usuarios WHERE usuario= '$use' AND  clave='$contrasena'");
        if ($datos = $sql->fetch_object()) {
            echo './inicio.php';
        } else {
            echo 'Ni mergas';
        }
    }
}

